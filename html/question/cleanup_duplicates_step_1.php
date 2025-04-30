<?php

const CLI_SCRIPT = true;

require_once(__DIR__ . '/../config.php');
require_once($CFG->libdir . '/clilib.php');
require_once($CFG->libdir . '/adminlib.php');

ini_set('memory_limit', '16G');  // Increase to 1GB or higher if needed
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// CLI options
[$options, $unrecognized] = cli_get_params([
    'help' => false,
    'contextid' => 0,
    'courseid' => 0,
    'categoryid' => 0,
    'force' => false,
    'all' => false,
    'dryrun' => false,
    'limit' => 10000000,
    'context-aware' => true, // New option to enable context-aware duplicate detection
], [
    'h' => 'help',
    'x' => 'contextid',
    'c' => 'courseid',
    'g' => 'categoryid',
    'f' => 'force',
    'a' => 'all',
    'd' => 'dryrun',
    'l' => 'limit',
    'w' => 'context-aware' // Short option for context-aware
]);

if ($unrecognized) {
    $unrecognized = implode("\n  ", $unrecognized);
    cli_error(get_string('cliunknowoption', 'admin', $unrecognized));
}

// Display help
if ($options['help']) {
    $help = "CLI script to update duplicate question stamps globally in Moodle.

Options:
-h, --help                  Print this help.
-x, --contextid=INT         Process a specific context ID.
-c, --courseid=INT          Process a specific course ID.
-g, --categoryid=INT        Process a specific course category ID.
-a, --all                   Process all contexts in the system.
-f, --force                 Skip confirmation (use with caution).
-d, --dryrun                Show what would be updated without making changes.
-l, --limit=INT             Limit the number of questions to process (default: 10000000).
-w, --context-aware         Only mark questions as duplicates within the same context (default: true).

Examples:
\$ php moodle-global-duplicate-stamp-updater-cli.php --contextid=123
\$ php moodle-global-duplicate-stamp-updater-cli.php --courseid=123
\$ php moodle-global-duplicate-stamp-updater-cli.php --categoryid=5
\$ php moodle-global-duplicate-stamp-updater-cli.php --all
\$ php moodle-global-duplicate-stamp-updater-cli.php --all --dryrun
\$ php moodle-global-duplicate-stamp-updater-cli.php --all --limit=5000
\$ php moodle-global-duplicate-stamp-updater-cli.php --all --no-context-aware
";

    cli_writeln($help);
    exit(0);
}

// Define context level constants if not already defined
if (!defined('CONTEXT_SYSTEM')) { define('CONTEXT_SYSTEM', 10); }
if (!defined('CONTEXT_USER')) { define('CONTEXT_USER', 30); }
if (!defined('CONTEXT_COURSECAT')) { define('CONTEXT_COURSECAT', 40); }
if (!defined('CONTEXT_COURSE')) { define('CONTEXT_COURSE', 50); }
if (!defined('CONTEXT_MODULE')) { define('CONTEXT_MODULE', 70); }
if (!defined('CONTEXT_BLOCK')) { define('CONTEXT_BLOCK', 80); }

// Check if proper options are provided
$paramCount = 0;
if (!empty($options['contextid'])) { $paramCount++; }
if (!empty($options['courseid'])) { $paramCount++; }
if (!empty($options['categoryid'])) { $paramCount++; }
if (!empty($options['all'])) { $paramCount++; }

if ($paramCount === 0) {
    cli_error('At least one of: context ID (--contextid), course ID (--courseid), category ID (--categoryid), or --all must be specified. Use --help for help.');
}

if ($paramCount > 1) {
    cli_error('Only one of: context ID, course ID, category ID, or all flag can be specified together.');
}

$contextId = (int)$options['contextid'];
$courseId = (int)$options['courseid'];
$categoryId = (int)$options['categoryid'];
$processAll = (bool)$options['all'];
$force = (bool)$options['force'];
$dryRun = (bool)$options['dryrun'];
$limit = (int)$options['limit'];
$contextAware = (bool)$options['context-aware']; // Get the context-aware setting

if ($dryRun) {
    cli_writeln("DRY RUN MODE: No changes will be made to the database.");
}

cli_writeln("LIMIT MODE: Processing a maximum of {$limit} questions.");

if ($contextAware) {
    cli_writeln("CONTEXT-AWARE MODE: Only considering questions as duplicates within the same context.");
} else {
    cli_writeln("GLOBAL MODE: Questions can be considered duplicates across different contexts.");
}

// Function to get context name for display
function get_context_name($contextId, $contextLevel, $instanceId) {
    global $DB;
    
    $name = "Unknown Context {$contextId}";
    
    switch ($contextLevel) {
        case CONTEXT_SYSTEM:
            $name = "System";
            break;
        case CONTEXT_USER:
            $user = $DB->get_record('user', ['id' => $instanceId]);
            if ($user) {
                $name = "User: {$user->firstname} {$user->lastname}";
            } else {
                $name = "Unknown User";
            }
            break;
        case CONTEXT_COURSECAT:
            $category = $DB->get_record('course_categories', ['id' => $instanceId]);
            if ($category) {
                $name = "Category: {$category->name}";
            } else {
                $name = "Unknown Category";
            }
            break;
        case CONTEXT_COURSE:
            $course = $DB->get_record('course', ['id' => $instanceId]);
            if ($course) {
                $name = "Course: {$course->fullname}";
            } else {
                $name = "Unknown Course";
            }
            break;
        case CONTEXT_MODULE:
            // Get module name and course
            $cm = $DB->get_record('course_modules', ['id' => $instanceId]);
            if ($cm) {
                $module = $DB->get_record('modules', ['id' => $cm->module]);
                $course = $DB->get_record('course', ['id' => $cm->course]);
                $moduleName = "Unknown";
                
                if ($module) {
                    // Get the actual instance name based on module type
                    $moduleInstance = $DB->get_record($module->name, ['id' => $cm->instance]);
                    if ($moduleInstance && isset($moduleInstance->name)) {
                        $moduleName = $moduleInstance->name;
                    }
                }
                
                $courseName = $course ? $course->shortname : "Unknown";
                $name = "Module: {$moduleName} in {$courseName}";
            } else {
                $name = "Unknown Module";
            }
            break;
        case CONTEXT_BLOCK:
            $name = "Block {$instanceId}";
            break;
    }
    
    return "{$name} (Context {$contextId})";
}

// Function to get where clause for context filtering
function get_context_filter($contextId = 0, $courseId = 0, $categoryId = 0) {
    global $DB;
    
    if ($contextId > 0) {
        // Specific context
        return "ctx.id = {$contextId}";
    } elseif ($courseId > 0) {
        // Course context and its children
        $courseContext = $DB->get_record('context', ['contextlevel' => CONTEXT_COURSE, 'instanceid' => $courseId]);
        if (!$courseContext) {
            cli_error("Course with ID {$courseId} not found or has no context.");
        }
        return "ctx.path LIKE '{$courseContext->path}/%' OR ctx.id = {$courseContext->id}";
    } elseif ($categoryId > 0) {
        // Category context and its children
        $catContext = $DB->get_record('context', ['contextlevel' => CONTEXT_COURSECAT, 'instanceid' => $categoryId]);
        if (!$catContext) {
            cli_error("Category with ID {$categoryId} not found or has no context.");
        }
        return "ctx.path LIKE '{$catContext->path}/%' OR ctx.id = {$catContext->id}";
    } else {
        // All contexts
        return "1=1";
    }
}

// Function to find and update duplicate stamps
function process_duplicates($contextId = 0, $courseId = 0, $categoryId = 0, $force = false, $dryRun = false, $limit = 10000000, $contextAware = true) {
    global $DB;

    cli_writeln("\n" . str_repeat("=", 80));

    // Set context filter message
    if ($contextId > 0) {
        $context = $DB->get_record('context', ['id' => $contextId]);
        if (!$context) {
            cli_error("Context with ID {$contextId} not found.");
        }
        $filterMsg = "specific context: " . get_context_name($contextId, $context->contextlevel, $context->instanceid);
    } elseif ($courseId > 0) {
        $course = $DB->get_record('course', ['id' => $courseId]);
        if (!$course) {
            cli_error("Course with ID {$courseId} not found.");
        }
        $filterMsg = "course context: {$course->fullname} (ID: {$courseId}) and its child contexts";
    } elseif ($categoryId > 0) {
        $category = $DB->get_record('course_categories', ['id' => $categoryId]);
        if (!$category) {
            cli_error("Category with ID {$categoryId} not found.");
        }
        $filterMsg = "category context: {$category->name} (ID: {$categoryId}) and its child contexts";
    } else {
        $filterMsg = "all contexts in the system";
    }

    cli_writeln("FINDING DUPLICATES IN: {$filterMsg}");
    cli_writeln("LIMIT: Maximum {$limit} questions will be processed");
    cli_writeln(str_repeat("=", 80) . "\n");

    // Build context filter
    $contextFilter = get_context_filter($contextId, $courseId, $categoryId);

    // First get all questions that match our criteria
    try {
        // Get all questions without ROW_NUMBER() partitioning
        $sql = "SELECT 
                q.id AS question_id,
                q.name AS question_name,
                q.stamp AS question_stamp,
                qc.id AS category_id,
                qc.name AS category_name,
                ctx.id AS context_id,
                ctx.contextlevel AS context_level,
                ctx.instanceid AS instance_id,
                ctx.path AS context_path
            FROM 
                {question} q
            JOIN 
                {question_versions} qv ON q.id = qv.questionid
            JOIN 
                {question_bank_entries} qbe ON qv.questionbankentryid = qbe.id
            JOIN 
                {question_categories} qc ON qbe.questioncategoryid = qc.id
            JOIN 
                {context} ctx ON qc.contextid = ctx.id
            WHERE 
                {$contextFilter}
            ORDER BY
                q.stamp, q.id
            ";
        cli_writeln("SQL query completed, starting to process results...");

        $allQuestions = $DB->get_records_sql($sql);
        cli_writeln("Found " . count($allQuestions) . " questions, grouping by stamp...");


    } catch (Exception $e) {
        // Try alternative query for older Moodle versions
        try {
            $sql = "SELECT 
                    q.id AS question_id,
                    q.name AS question_name,
                    q.stamp AS question_stamp,
                    qc.id AS category_id,
                    qc.name AS category_name,
                    ctx.id AS context_id,
                    ctx.contextlevel AS context_level,
                    ctx.instanceid AS instance_id,
                    ctx.path AS context_path
                FROM 
                    {question} q
                JOIN 
                    {question_categories} qc ON q.category = qc.id
                JOIN 
                    {context} ctx ON qc.contextid = ctx.id
                WHERE 
                    {$contextFilter}
                ORDER BY
                    q.stamp, q.id
                LIMIT {$limit}";

            $allQuestions = $DB->get_records_sql($sql);
        } catch (Exception $e) {
            cli_writeln("Error fetching questions: " . $e->getMessage());
            return [0, 0];
        }
    }

    if (empty($allQuestions)) {
        cli_writeln("No questions found with the current filter criteria.");
        return [0, 0];
    }

    cli_writeln("Found " . count($allQuestions) . " questions total.");

    // Process questions to find duplicates
    $questionsByStamp = [];

    if ($contextAware) {
        // Group questions by both stamp AND context_id
        foreach ($allQuestions as $q) {
            $key = $q->question_stamp . '_' . $q->context_id;
            if (!isset($questionsByStamp[$key])) {
                $questionsByStamp[$key] = [
                    'stamp' => $q->question_stamp,
                    'context_id' => $q->context_id,
                    'questions' => []
                ];
            }
            $questionsByStamp[$key]['questions'][] = $q;
        }
    } else {
        // Group questions by stamp only (global approach)
        foreach ($allQuestions as $q) {
            if (!isset($questionsByStamp[$q->question_stamp])) {
                $questionsByStamp[$q->question_stamp] = [
                    'stamp' => $q->question_stamp,
                    'context_id' => null, // Not used in global mode
                    'questions' => []
                ];
            }
            $questionsByStamp[$q->question_stamp]['questions'][] = $q;
        }
    }

    // Filter for groups with more than one question (these are duplicates)
    $duplicateGroups = array_filter($questionsByStamp, static function($group) {
        return count($group['questions']) > 1;
    });

    cli_writeln("Found " . count($duplicateGroups) . " groups with duplicate stamps" . 
               ($contextAware ? " within the same context." : " across all contexts."));

    if (empty($duplicateGroups)) {
        cli_writeln("No duplicates found. Exiting.");
        return [0, 0];
    }

    // Process duplicates to standardized format
    $duplicates = [];

    foreach ($duplicateGroups as $group) {
        $rowNum = 0;
        $stamp = $group['stamp'];

        foreach ($group['questions'] as $q) {
            $rowNum++;
            $dup = new stdClass();
            $dup->question_id = $q->question_id;
            $dup->question_name = $q->question_name;
            $dup->question_stamp = $q->question_stamp;
            $dup->category_id = $q->category_id;
            $dup->category_name = $q->category_name;
            $dup->context_id = $q->context_id;
            $dup->context_level = $q->context_level;
            $dup->instance_id = $q->instance_id;
            $dup->context_path = $q->context_path;
            $dup->row_num = $rowNum;
            $dup->newstamp = ($rowNum > 1) ? "dup" . ($rowNum-1) . "." . $stamp : null;
            $dup->newname = ($rowNum > 1) ? substr($q->question_name . " (duplicate " . ($rowNum-1) . ")", 0, 256) : null;
            $duplicates[$q->question_id] = $dup;
        }
    }

    // Count unique stamps with duplicates
    $stamps = [];
    foreach ($duplicates as $duplicate) {
        $key = $contextAware ? 
            $duplicate->question_stamp . '_' . $duplicate->context_id : 
            $duplicate->question_stamp;

        if (!in_array($key, $stamps)) {
            $stamps[] = $key;
        }
    }

    // Group duplicates by context for better reporting
    $contextDuplicates = [];
    foreach ($duplicates as $duplicate) {
        $contextKey = $duplicate->context_id;
        if (!isset($contextDuplicates[$contextKey])) {
            $contextDuplicates[$contextKey] = [
                'context_id' => $duplicate->context_id,
                'context_level' => $duplicate->context_level,
                'instance_id' => $duplicate->instance_id,
                'duplicates' => []
            ];
        }
        $contextDuplicates[$contextKey]['duplicates'][] = $duplicate;
    }

    // Count duplicates that need updates (row_num > 1)
    $duplicatesToUpdate = array_filter($duplicates, static function($dup) {
        return $dup->row_num > 1;
    });

    cli_writeln("Global Summary (limited to first {$limit} questions):");
    cli_writeln("- Total stamps with duplicates: " . count($stamps));
    cli_writeln("- Total questions with duplicates: " . count($duplicates));
    cli_writeln("- Questions requiring updates: " . count($duplicatesToUpdate));
    cli_writeln("- Contexts with duplicates: " . count($contextDuplicates));

    // Display details about each context with duplicates
    cli_writeln("\nDuplicates by Context:");
    foreach ($contextDuplicates as $contextData) {
        $contextName = get_context_name(
            $contextData['context_id'], 
            $contextData['context_level'], 
            $contextData['instance_id']
        );

        $dupsInContext = count($contextData['duplicates']);
        $dupsToUpdateInContext = count(array_filter($contextData['duplicates'], static function($dup) {
            return $dup->row_num > 1;
        }));

        cli_writeln("- {$contextName}");
        cli_writeln("  * Questions with duplicates: {$dupsInContext}");
        cli_writeln("  * Questions requiring updates: {$dupsToUpdateInContext}");
    }

    // If no duplicates need updates, skip processing
    if (empty($duplicatesToUpdate)) {
        cli_writeln("\nNo questions need stamp updates. Skipping.");
        return [count($stamps), 0];
    }

    // Display more details about duplicates
    cli_writeln("\nDetailed duplicate information (showing first 10 stamp groups):");

    // Group by stamp for display
    $groupedDuplicates = [];
    foreach ($duplicates as $duplicate) {
        $key = $contextAware ? 
            $duplicate->question_stamp . '_' . $duplicate->context_id : 
            $duplicate->question_stamp;

        if (!isset($groupedDuplicates[$key])) {
            $groupedDuplicates[$key] = [];
        }
        $groupedDuplicates[$key][] = $duplicate;
    }

    // Limit the detailed output to avoid overwhelming terminal
    $counter = 0;
    foreach ($groupedDuplicates as $key => $dups) {
        if ($counter++ >= 10) {
            cli_writeln("\n... and " . (count($groupedDuplicates) - 10) . " more stamp groups");
            break;
        }

        // Extract context info from first question for display
        $contextInfo = get_context_name(
            $dups[0]->context_id,
            $dups[0]->context_level,
            $dups[0]->instance_id
        );

        cli_writeln("\nDuplicates with stamp: {$dups[0]->question_stamp} in {$contextInfo}");

        foreach (array_slice($dups, 0, 5) as $dup) {
            $needsUpdate = $dup->row_num > 1 ? "[NEEDS UPDATE]" : "[ORIGINAL]";
            cli_writeln("- [{$dup->question_id}] {$dup->question_name} {$needsUpdate}");
        }

        if (count($dups) > 5) {
            cli_writeln("- ... and " . (count($dups) - 5) . " more questions with this stamp");
        }
    }

    // Ask for confirmation before proceeding
    if (!$force && !$dryRun) {
        cli_writeln("\nAre you sure you want to update " . count($duplicatesToUpdate) . " question stamps? (y/N)");
        $confirmation = "yes";

        if (!$confirmation || !preg_match('/^y(es)?$/i', $confirmation)) {
            cli_writeln("Update canceled.");
            return [count($stamps), 0];
        }
    }

    // Exit if dry run
    if ($dryRun) {
        cli_writeln("\nDRY RUN - No changes were made. Re-run without --dryrun to apply changes.");
        return [count($stamps), count($duplicatesToUpdate)];
    }

    // Process duplicate stamp updates
    $updatedCount = 0;
    $errors = [];

    cli_writeln("\nUpdating question stamps:");

    try {
        // Only update questions where row_num > 1 (the duplicates, not the originals)
        $totalToUpdate = count($duplicatesToUpdate);
        $counter = 0;

        foreach ($duplicatesToUpdate as $duplicate) {
            $counter++;
            $progress = round(($counter / $totalToUpdate) * 100);
            $contextName = get_context_name($duplicate->context_id, $duplicate->context_level, $duplicate->instance_id);

            cli_writeln("[" . str_pad($progress . "%", 5) . "] Updating question {$duplicate->question_id}: {$duplicate->question_name}");
            cli_writeln("    In context: {$contextName}");
            cli_writeln("    New name: {$duplicate->newname}");
            cli_writeln("    New stamp: {$duplicate->newstamp}");

            // Update the stamp and name for each duplicate
            $updateFields = new stdClass();
            $updateFields->id = $duplicate->question_id;
            $updateFields->stamp = $duplicate->newstamp;
            $updateFields->name = $duplicate->newname;

            $result = $DB->update_record('question', $updateFields);
            if ($result) {
                $updatedCount++;
            } else {
                $errors[] = "Failed to update question ID {$duplicate->question_id}";
                cli_writeln("    ERROR: Failed to update record");
            }
        }

        cli_writeln("\nCompleted: Successfully updated {$updatedCount} of {$totalToUpdate} question stamps.");
    } catch (Exception $e) {
        cli_writeln("Error during update: " . $e->getMessage());
        return [count($stamps), 0];
    }

    // Show any errors
    if (!empty($errors)) {
        cli_writeln("\nWarning: Some questions could not be updated:");
        foreach ($errors as $error) {
            cli_writeln("- " . $error);
        }
    }

    return [count($stamps), $updatedCount];
}

// Execute the main function
try {
    [$duplicateCount, $updatedCount] = process_duplicates($contextId, $courseId, $categoryId, $force, $dryRun, $limit, $contextAware);

    // Display final statistics
    cli_writeln("\n" . str_repeat("=", 80));
    cli_writeln("FINAL STATISTICS");
    cli_writeln(str_repeat("=", 80));
    cli_writeln("Total stamps with duplicates: " . $duplicateCount);
    if ($dryRun) {
        cli_writeln("Total questions that would be updated: " . $updatedCount);
        cli_writeln("DRY RUN - No changes were made");
    } else {
        cli_writeln("Total questions updated: " . $updatedCount);
    }
    cli_writeln("Questions processed were limited to: " . $limit);
    cli_writeln("Context-aware mode: " . ($contextAware ? "ON (only considered duplicates within same context)" : "OFF (considered duplicates across all contexts)"));

    exit(0);
} catch (Exception $e) {
    cli_error("Error: " . $e->getMessage());
}
