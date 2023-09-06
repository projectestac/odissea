Description of PHPMailer 6.6.5 library import into Moodle

We now use a vanilla version of phpmailer and do our customisations in a
subclass.

For more information on this version of PHPMailer, check out https://github.com/PHPMailer/PHPMailer/releases/tag/v6.6.5

To upgrade this library:
1. Download the latest release of PHPMailer in https://github.com/PHPMailer/PHPMailer/releases.
2. Remove everything inside lib/phpmailer/ folder except README_MOODLE.txt, moodle_phpmailer.php and moodle_phpmailer_oauth.php.
3. Extract the contents of the release archive to lib/phpmailer.
4. Remove the following files that were extracted:
   - composer.json
   - get_oauth_token.php
   - SECURITY.md
   - src/POP3.php
5. Update lib/thirdpartylibs.xml.
