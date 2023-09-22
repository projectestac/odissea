# This is a description for the TinyMCE 6 library integration with Moodle.

Please note that we have a clone of the official TinyMCE repository which contains the working build and branch for each release. This ensures build repeatability and gives us the ability to patch stable versions of Moodle for security fixes where relevant.

The Moodle `master` branch is named as the upcoming STABLE branch name, for example during the development of Moodle 4.2.0, the upcoming STABLE branch name will be MOODLE_402_STABLE.

## Patches included in this release

- MDL-78714: Add support for disabling XSS Sanitisation (TINY-9600)
- MDL-77470: Fix for CVE-2022-23494

Please note: TinyMCE issue numbers are related to bugs in their private issue
tracker. See git history of their repository for relevant information.

## Upgrade procedure for TinyMCE Editor

1. Store an environment variable to the Tiny directory in the Moodle repository (the current directory).

 ```
 MOODLEDIR=`pwd`
 ```

2. Check out a clean copy of TinyMCE of the target version.

 ```../../
 tinymce=`mktemp -d`
 cd "${tinymce}"
 git clone https://github.com/tinymce/tinymce.git
 cd tinymce
 git checkout [version]
 ```

3. Update the typescript configuration to generate ES6 modules with ES2020 target.

 ```
 sed -i 's/"module".*es.*",/"module": "es6",/' tsconfig.shared.json
 sed -i 's/"target.*es.*",/"target": "es2020",/' tsconfig.shared.json
 ```

4. Install dependencies

 ```
yarn
 ```

5. Check in the base changes

 ```
git commit -m 'MDL: Add build configuration'
 ```

6. Apply any necessary security patches.
7. Rebuild TinyMCE

 ```
yarn
yarn build
 ```

8. Remove the old TinyMCE configuration and replace it with the newly built version.

 ```
rm -rf "${MOODLEDIR}/js"
cp -r modules/tinymce/js "${MOODLEDIR}/js"
 ```

9. Push the build to MoodleHQ for future change support

 ```
# Tag the next Moodle version.
git tag v4.2.0
git remote add moodlehq --tags
git push moodlehq MOODLE_402_STABLE
 ```

10. Check the (Release notes)[https://www.tiny.cloud/docs/tinymce/6/release-notes/] for any new plugins, premium plugins, menu items, or buttons and add them to classes/manager.php

## Update procedure for included TinyMCE translations

1. Visit https://www.tiny.cloud/get-tiny/language-packages/ and download the "TinyMCE 6 All languages" zip file.
2. Check the list of languages and confirm that the German translation is still at 100%. If not, then make a note of a language which is.
3. Unzip the translation into a new directory:

 ```bash
 langdir=`mktemp -d`
 cd "${langdir}"
 unzip path/to/langs.zip
 ```

4. Run the translation tool:

 ```bash
 node "${MOODLEDIR}/tools/createLangStrings.mjs"
 ```

 This will generate a language file for each available Language, as well as a `tinystrings.json`, and a `strings.php` which will be used in the subsequent steps.

5. Copy the `tinystrings.json` file into the Moodle directory

 ```
 cp tinystrings.json "${MOODLEDIR}/tinystrings.json"
 ```

6. Copy the content of the `strings.php` file over the existing tiny strings:

 ```
 sed -i "/string\['tiny:/d" "${MOODLEDIR}/lang/en/editor_tiny.php"
 cat strings.php >> "${MOODLEDIR}/lang/en/editor_tiny.php"
 ```

7. Commit changes
8. If required, the remaining language strings can be fed into AMOS.

---

**Note:** A set of language files are also generated for all supported translations and may be submitted to AMOS if desired.

**Note:** You will need to manually check for any Moodle-updated language strings as part of this change (for example any from the en_fixes).

---
