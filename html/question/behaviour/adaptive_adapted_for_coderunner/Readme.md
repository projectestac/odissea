# Adaptive question behaviour for CodeRunner questions.

This Moodle question behaviour was created by Richard Lobb,
University of Canterbury, New Zealand.

This question behaviour was created solely for use with CodeRunner:
https://github.com/trampgeek/moodle-qtype_coderunner/. It provides the
caching of question test results needed to prevent re-testing a student's
code every time the result page is viewed.

To install, either [download the zip file](https://github.com/trampgeek/moodle-qbehaviour_adaptive_adapted_for_coderunner/archive/master.zip,
unzip it, and place it in the directory `moodle/question/behaviour/adaptive_adapted_for_coderunner`.
Alternatively, get the code using git by running the following command in the
top level folder of your Moodle install:

    git clone https://github.com/trampgeek/moodle-qbehaviour_adaptive_adapted_for_coderunner.git question/behaviour/adaptive_adapted_for_coderunner

For full install instructions, see the
[CodeRunner install instructions](https://github.com/trampgeek/moodle-qtype_coderunner/blob/master/Readme.md).

## CHANGE HISTORY
29/01/25. V1.4.4. Bug fix Regrade Error with "Each attempt builds on the last" = "Yes" and Updated CodeRunner Question Version (Issue CodeRunner issue #236). 
18/04/24. V1.4.3. Bug fix: regrading of quizzes run with adaptive-no-penalties would apply penalties. Also some code-tidying.
13/04/22: V1.4.2. Bug fix: a regrade while the sandbox was down, or after a
question author had set the time limit to more than the sandbox would accept,
caused submissions to be lost when a Check immediately followed a Precheck.
23/11/21: V1.4.1. Add support for "Give up" button (Time Hunt). Add 'graderstate'
functionality for use by combinator template graders.

24/02/21: V1.3.9. Add quizbehaviour to step info.
31/01/21: V1.3.8. Add step info (numchecks, numprechecks and fraction) to response
array so that question author can alter feedback accordingly.
11/02/20: V1.3.7. Set css class for correct styling of Precheck button.
25/01/19: V1.3.6. Fix bug in privacy provider (not working with pre-version7 PHP).
03/8/18: V1.3.5 Implement Moodle Privacy API (null provider).

28/4/18: V1.3.4 Change state string to "Precheck" after a precheck. [Thanks to Tim Hunt.]

20/5/17: V1.3.3 Prevent resubmission of an unchanged answer from being penalised.

2/03/17: Prevent penalties being applied when grading fails due to a sandbox error

6/01/17: Fix wrong penalty calculation when using penalty-regime on question
with all-or-nothing grading turned off.

4/01/17: Fix bug - previous answers were not being correctly loaded into the
answer boxes when "Each attempt builds on the last" was used.

9/11/16: Provide *Precheck* capabilities (an extra button that
students can click to get a penalty-free run that provides limited checking
of their code).

