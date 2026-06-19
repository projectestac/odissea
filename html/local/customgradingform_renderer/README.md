<h2>🧩 Plugin: Rubric Importer Core (local_customgradingform_renderer)</h2>
<p><strong>Component:</strong> <code>local_customgradingform_renderer</code></p>
<hr>
<h3>📌 Features</h3>
<ul>
  <li>Enables importing rubrics from a CSV file into any Moodle Assignment using
    the advanced grading method.</li>
  <li>Processes and structures criteria, levels, and scores using Moodle's
    internal grading APIs.</li>
  <li>Ensures data integrity through robust validation and sanitization.</li>
  <li>Provides <strong>auto-debugging</strong> when Moodle debugging mode is
    enabled — helpful for developers and site administrators.</li>
  <li>Supports localization and uses standard Moodle file handling APIs for
    secure temporary file management.</li>
</ul>
<h3>📂 CSV Format Example</h3>
<p>Your CSV file should follow this exact structure:</p>
<pre>criterion,level,level_description,score
"Clarity","1","Clear and concise","10"
"Clarity","2","Mostly clear","5"
"Clarity","3","Lacks clarity","0"
</pre>
<h3>🧪 Usage Scenario</h3>
<ol>
  <li>Download and install the latest version of this plugin from:<br>🔗 <a
      href="https://github.com/ingrichardrangel/moodle-local_customgradingform_renderer"
      target="_blank" rel="noreferrer noopener">
      https://github.com/ingrichardrangel/moodle-local_customgradingform_renderer</a>
  </li>
  <li>Also download and install the block plugin to access the import button
    within Assignment activities:<br>🔗 <a
      href="https://github.com/ingrichardrangel/moodle-block_importrubric/tree/main"
      target="_blank" rel="noreferrer noopener">
      https://github.com/ingrichardrangel/moodle-block_importrubric</a></li>
  <li>Enter an Assignment activity and add the <strong>“Import rubric from
      CSV”</strong> block manually.</li>
  <li>Click the button, upload your CSV, and the plugin will process and
    validate the rubric data.</li>
  <li>You will be redirected to the <strong>Advanced Grading interface</strong>
    where the rubric is available in draft form for review and activation.</li>
</ol>
<h3>✅ Validation Rules</h3>
<ul>
  <li>Ensures no repeated scores among levels under the same criterion.</li>
  <li>Validates that the sum of the levels with the maximum score across all
    criteria equals the maximum grade of the Assignment.</li>
  <li>Displays actual score total and expected maximum to help user comparison
    in case of error.</li>
  <li>If enabled in plugin settings:
    <ul>
      <li>Verifies that each criterion includes a level with the minimum allowed
        score.</li>
      <li>Checks that individual level scores do not exceed the maximum allowed
        score.</li>
    </ul>
  </li>
</ul>
<h3>📤 File Handling</h3>
<ul>
  <li>Uploaded CSV files are stored <strong>temporarily</strong> in Moodle's
    draft area while parsing and processing.</li>
  <li>Rubric data is inserted directly into Moodle’s database through the
    Advanced Grading APIs.</li>
  <li>Rubrics are always stored as <strong>drafts</strong>, giving teachers full
    control to enable, modify, or discard them.</li>
</ul>
<h3>🛡️ Security and Debugging</h3>
<ul>
  <li>All user-submitted data is sanitized using <code>clean_param()</code> to
    ensure input security.</li>
  <li>In Moodle debugging mode, the plugin outputs helpful information and error
    messages for deeper insight.</li>
</ul>
<h3>⚙️ Requirements</h3>
<ul>
  <li>Requires Moodle 4.1 or later.</li>
  <li>Must be used alongside the block <strong>block_importrubric</strong> to
    enable interface access from Assignment activities.</li>
</ul>
<hr>
<p><em>Developed by Richard Rangel – 2025</em></p>
