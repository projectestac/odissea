# Board
Copyright (C) 2026 [Brickfield Education Labs](https://www.brickfield.ie/)

## What is Board?
Encourage lively discussions and idea-sharing with Board, a post-it board activity for students!

This is an anonymous collaborative activity, where students can add their contributions of text, images, files, URLs, and videos, as a collection of visual notes. Notes can be commented on and optionally rated.

Teachers manage boards, with optional templates, export contributions to CSV, and track participation through the board history.

## Who is it for?

- **Teachers** running brainstorming, reflection, or formative activities who want a lightweight, visual way to collect student contributions.
- **Students** sharing ideas collaboratively in a low-stakes, visually engaging format.
- **Administrators** deploying a reusable Moodle-controlled activity that integrates with Moodle's groups, completion, backup/restore, and privacy frameworks.

## Usage
Teachers can deploy ready-made, purpose-built board activities from templates in moments, or create custom ones as needed.

Group and single-user modes are also available. Optional completion criteria are provided also.

Students can share their ideas anonymously, and teachers can track these contributions via their board download options.

Students can include the following in their notes:
- Heading.
- Text with multiple formatting options: headings, lists, line breaks, bold and italics.
- Link.
- Image.
- Video (Youtube).
- Comment on any viewable notes.
- Receive notifications about new comments on notes written.
- Rate any viewable notes, if enabled.

## License
2023 Onward [Brickfield Education Labs](https://www.brickfield.ie)

## Version support
This plugin has been developed to work on Moodle releases 4.5, 5.0, 5.1, and 5.2.

## Funding credits
Initial funding for this plugin was provided by the National Institute for Digital Learning at Dublin City University under the SATLE fund from the National Forum. Subsequent funding has been received from Athlone Institute of Technology under the SATLE fund from the National Forum, and also from UCL.

Funding for templates, text formatting, and file attachments was also provided by the National Institute for Digital Learning at Dublin City University under the SATLE fund from the National Forum.

Funding for comment improvements, including notifications, icon, and icon count was provided by [Charité – Universitätsmedizin Berlin](https://www.charite.de).

## Development
This plugin has been developed and is maintained by Brickfield Education Labs.

If you wish to contribute funding to the ongoing development of features and / or
maintenance of the plugin - please contact [support@brickfield.ie](mailto:support@brickfield.ie).

This module uses code derived from ["jquery.editable.amd.js"](https://github.com/victorjonsson/jquery-editable/).
This code written by [Victor Jonsson](http://victorjonsson.se/) is licensed under [GNU GPLv2](http://www.gnu.org/licenses/gpl-2.0.html).

### Icon design
Many thanks to [Stuart Lamour](https://github.com/stuartlamour) for our board icon! Also thanks to [Luca Bosch](https://github.com/lucaboesch) for our updated 4.04 icon!

## Important Links
* [Code repository](https://github.com/brickfield/moodle-mod_board).
* [Plugin directory](https://moodle.org/plugins/mod_board).
* [Board user guide](https://docs.brickfield.ie/mod-board/).

## Accessibility

Board meets WCAG 2.2 Level AA throughout. All interactive controls have keyboard access and visible focus indicators. Icon controls carry accessible names via `aria-label`. The board respects `prefers-reduced-motion` and renders correctly under Windows High Contrast (forced-colors).

## Installation
1. Unzip and copy the "board" folder into your Moodle's "mod/" folder.
2. Visit the admin page to install the plugin.

Further installation instructions can be found on the "[Installing plugins](http://docs.moodle.org/en/Installing_contributed_modules_or_plugins)" Moodle documentation page.

## Privacy

Board stores the following personal data within your Moodle database. No data is sent to any external service.

- **Posts** (`board_notes`): user ID, column, heading, content, attachment info, URL, and creation timestamp.
- **Board history** (`board_history`): user ID, board ID, action type, content snapshot, and timestamp. Used for audit and export.
- **Ratings** (`board_note_ratings`): user ID, rated note ID, and timestamp.
- **Comments** (`board_comments`): user ID, note ID, comment text, and timestamp.

Board fully supports Moodle's Privacy API: user data export and deletion are implemented for all four tables.

## Troubleshooting

**Posts not saving.** Check that web services are enabled (Site administration → Advanced features → Enable web services). Board uses Moodle's external functions API for all post operations.

**YouTube videos not appearing.** Confirm "Allow YouTube" is enabled in the site-wide Board settings. Also check your Moodle site's Content Security Policy does not block `youtube.com` or `youtube-nocookie.com`.

**Embed iframe is too narrow/tall.** Adjust the Embed width and Embed height values in the site-wide Board settings. These accept any valid CSS length (`px`, `%`, `rem`, `vh`).

**CSV export is empty.** The export only includes posts in the current group context. Check the group mode selected for the activity and that the correct group is active.

If you have any support queries regarding the usage of Board, you may contact Brickfield as follows:

* Via the [Board github Issues page here](https://github.com/brickfield/moodle-mod_board/issues).
* Via the [Moodle Plugins Database page here](https://moodle.org/plugins/mod_board).
* Via the Brickfield support desk at 'support @ brickfield . ie'.

## Configurations

### Site-wide settings (Site administration → Plugins → Activity modules → Board)

| Setting | Description |
|---|---|
| New column icon | Font Awesome icon class (v4.7) for the "Add column" button. |
| New post icon | Font Awesome icon class (v4.7) for the "Add post" button. |
| Enable privacy statement | Display privacy statement for students regarding teacher access to the board content. |
| Media selection | Controls how media type buttons are displayed in the post editor. |
| Post maximum length | Maximum characters for post content. Content over this limit is trimmed. |
| Board refresh timer | Seconds between automatic board refreshes. Set to 0 to refresh only on user actions. |
| Column colours | One hex colour per line (3 or 6 characters, no `#`). Used as column header colours. Invalid values fall back to defaults. |
| Allow YouTube | Enables the YouTube media button in the post editor. |
| Embed width / height | CSS values (e.g. `100%`, `600px`) for the course-page embed iframe. |
| Accepted filetypes — background images | Filetypes allowed for board background images. |
| Accepted filetypes — content images | Filetypes allowed for image attachments in posts. |
| Accepted filetypes — uploaded files | Filetypes allowed for file attachments in posts. |
| Enabled single user modes | Allow or disallow specific single-user mode types site-wide. Does not affect already-created boards. |
| Logging (various) | Controls what content is included in the moodle logs. |

### Per-activity settings (Edit Board activity)

| Setting | Description |
|---|---|
| Board template | Start the board with a pre-built description and column structure. Only available before any posts exist. |
| Background colour | Hex colour for the board background (e.g. `#00cc99`). |
| Background image | Upload image for the board background. |
| Rating posts | Who can rate posts: None (Disabled), Students, Teachers, or All. |
| Hide column headers from students | Hides column header text for students only. |
| Sort by | Default sort order for posts within columns: None, Creation date, or Rating. |
| Single user mode | Disabled, Private (users can only see their own board), or Public (boards visible via a dropdown). |
| Limit posting by date | Prevents students from adding posts after a set date and time. |
| Allow all users to edit post placement | Lets students drag and re-order their own posts between columns. |
| Open links in new tab | All link URLs open in a new browser tab. |
| Embed on course page | Shows the board inline on the course page in addition to the activity page. |
| Hide embedded board name | Hides the activity name in the embedded view (useful on certain themes). |
| Optional completion condition: Require notes | Minimum number of posts a student must make to complete the activity. |
