Plugin: Import Rubric from CSV
=============================

This plugin allows teachers or managers to import a grading rubric from a CSV file directly into 
activities that use the advanced grading method by rubrics in Moodle.

----------------------------------
📦 Plugin name:
local_customgradingform_renderer

👤 Author:
Richard Rangel

🔄 Version:
1.0.0 (2025-05-19)

----------------------------------
🧩 Requirements:

- Moodle 4.1 or higher
- The local plugin "customgradingform_renderer" must be installed (required dependency)

----------------------------------
🔧 Functionality:

After accessing using the block_importrubric, you'll get an option to upload a CSV file.

This is an example of the CSV file structure:

criterion,level,level_description,score
Clarity,1,Excellent clarity,25
Clarity,2,Very clear with minor details,16
Clarity,3,Clear but with some doubts,12
Clarity,4,Not very clear,8
Clarity,5,Confusing,0
Organization,1,Impeccable structure,15
Organization,2,Clear structure with minimal adjustments,8
Organization,3,Functional structure,5
Organization,4,Poor organization,3
Organization,5,No clear structure,0
Subject knowledge,1,Outstanding command,20
Subject knowledge,2,Good command,16
Subject knowledge,3,Acceptable command,12
Subject knowledge,4,Limited command,8
Subject knowledge,5,Evident lack of knowledge,0
Writing,1,Perfect syntax and fluency,20
Writing,2,Good syntax with minor errors,16
Writing,3,Functional writing,12
Writing,4,Frequent errors,8
Writing,5,Very poor,0
Creativity,1,Highly creative,20
Creativity,2,Creative with original contributions,16
Creativity,3,Moderately creative,12
Creativity,4,Not very creative,8
Creativity,5,No creativity,0

The plugin will check for the settings.php validations if set in the administration page.  
It will also check that the total score matches the activity max score.  
Additionally, it validates repeated scores between levels of the same criteria.  
After importing, the rubric will save as a draft and redirect to the manage.php of the module 
activity inside the course for quick verification of the rubric.

----------------------------------
🚀 Installation:

1. Place this `customgradingform_renderer` folder inside `/local/`.
2. Make sure the plugin `block/block_importrubric` is also installed.
3. Go to Site Administration to complete the installation.
4. Add the block to any valid activity (as a teacher or manager).
5. You can also use the plugin installation module integrated in Moodle.

----------------------------------
🌐 Available languages:

- English (`lang/en`)

----------------------------------
🛡️ Permissions:

This plugin can only be used by users with editing capabilities:

- editingteacher (teachers with editing rights)
- manager (site managers or administrators)

----------------------------------
📄 License:

GNU GPL v3 – Free and open-source software.

----------------------------------
💬 Notes:

This plugin does not modify the Moodle core and is fully compatible with the official plugin system.
