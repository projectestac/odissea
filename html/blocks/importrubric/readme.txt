🧩 Plugin Name: Import Rubric from CSV
Component: block_importrubric

📌 Features
Block available for manual addition only within Assignment activities.
Displays a button to launch a custom rubric importer interface.
Allows importing of grading rubrics via .csv files.
Integrates with the plugin local_customgradingform_renderer for backend processing.
Verifies user capabilities before rendering import options.

🧪 Usage Scenario
This block is designed for teachers and managers who want to:
- Quickly upload detailed grading rubrics.
- Avoid manually creating rubrics through the Moodle UI.
- Apply consistent evaluation criteria across assignments using CSV templates.

Workflow Example:
- The teacher enters an Assignment activity.
- From the block drawer, the teacher adds the "Import Rubric from CSV" block manually.
- The block displays a button labeled “Import rubric from CSV”.
- Clicking the button opens a secure upload interface.
- The rubric is imported and configured into the assignment automatically.

🔐 Permissions
This block defines two capabilities:
- block/importrubric:addinstance – Required to see and use the block in an activity.
- block/importrubric:myaddinstance – Reserved for future use on dashboards.
Default roles with access: editingteacher, manager.

⚙️ Requirements
- Requires Moodle 4.1 or later.
- This block must be added manually by the user inside the Assignment activity where the rubric should be imported.
- This block requires the plugin local_customgradingform_renderer to work properly.

Please download and install the latest version of the required plugin from the following GitHub repository:
🔗 https://github.com/ingrichardrangel/moodle-local_customgradingform_renderer
