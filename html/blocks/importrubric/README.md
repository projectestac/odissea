<h2>🧩 Plugin Name: Import Rubric from CSV</h2>
<p><strong>Component:</strong> <code>block_importrubric</code></p>

<hr>

<h3>📌 Features</h3>
<ul>
  <li>Block available for manual addition only within <strong>Assignment activities</strong>.</li>
  <li>Displays a button to launch a custom rubric importer interface.</li>
  <li>Allows importing of grading rubrics via <code>.csv</code> files.</li>
  <li>Integrates with the plugin <code>local_customgradingform_renderer</code> for backend processing.</li>
  <li>Verifies user capabilities before rendering import options.</li>
</ul>

<h3>🧪 Usage Scenario</h3>
<p>
  This block is designed for teachers and managers who want to:
</p>
<ul>
  <li>Quickly upload detailed grading rubrics.</li>
  <li>Avoid manually creating rubrics through the Moodle UI.</li>
  <li>Apply consistent evaluation criteria across assignments using CSV templates.</li>
</ul>
<p><strong>Workflow Example:</strong></p>
<ol>
  <li>The teacher enters an <strong>Assignment activity</strong>.</li>
  <li>From the block drawer, the teacher <strong>adds the "Import Rubric from CSV" block manually</strong>.</li>
  <li>The block displays a button labeled <em>“Import rubric from CSV”</em>.</li>
  <li>Clicking the button opens a secure upload interface.</li>
  <li>The rubric is imported and configured into the assignment automatically.</li>
</ol>

<h3>🔐 Permissions</h3>
<p>This block defines two capabilities:</p>
<ul>
  <li><code>block/importrubric:addinstance</code> – Required to see and use the block in an activity.</li>
  <li><code>block/importrubric:myaddinstance</code> – Reserved for future use on dashboards.</li>
</ul>
<p><strong>Default roles with access:</strong> <code>editingteacher</code>, <code>manager</code>.</p>

<h3>⚙️ Requirements</h3>
<ul>
  <li>Requires <strong>Moodle 4.1</strong> or later.</li>
  <li>This block <strong>must be added manually by the user</strong> inside the Assignment activity where the rubric should be imported.</li>
  <li>This block <strong>requires the plugin</strong> <code>local_customgradingform_renderer</code> to work properly.</li>
  <li>Please download and install the latest version of the required plugin from the following GitHub repository:</li>
</ul>
<p>
  🔗 <a href="https://github.com/ingrichardrangel/moodle-local_customgradingform_renderer" target="_blank">
  https://github.com/ingrichardrangel/moodle-local_customgradingform_renderer</a>
</p>

<hr>
<p><em>Developed by Richard Rangel – 2025</em></p>
