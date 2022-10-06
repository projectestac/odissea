# Wiris Quizzes Matching question type
### Master Build Status
[![Build Status](https://travis-ci.org/wiris/moodle-qtype_matchwiris.svg?branch=master)](https://travis-ci.org/wiris/moodle-qtype_matchwiris)
### Development Build Status
[![Build Status](https://travis-ci.org/wiris/moodle-qtype_matchwiris.svg?branch=development)](https://travis-ci.org/wiris/moodle-qtype_matchwiris)

The Wiris Matching question type extends the Moodle matching type, adding mathematical functionality to it.

All mathematical items are generated in a single calculation section and they can be referenced from anywhere in the content, in the question statement, answer, feedback for the student, etc.

On the student's side, they will be able to introduce their answers by using a WYSIWYG formula editor and, if the teacher so specifies, they will have access to a Wiris cas session to make some calculations. The answer syntax checker will prevent the students from unnecessary errors and misspellings.

## Install instructions
To install it using git, type this command in the root of your Moodle install:
```
git clone https://github.com/wiris/moodle-qtype_matchwiris.git question/type/matchwiris
```
Then add /question/type/matchwiris to your git ignore.

Alternatively, download the zip from <https://github.com/wiris/moodle-qtype_matchwiris/archive/master.zip> it into the question/type folder, and then rename the new folder to "matchwiris".


## License


Wiris Matching question type is Licensed under the [GNU General Public, License Version 3](https://www.gnu.org/licenses/gpl-3.0.en.html).
