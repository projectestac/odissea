# GeoGebra question type for Moodle 3.5-3.11

## Introduction
The GeoGebra question type plugin allows teachers to set up questions which can be solved and automatically checked using GeoGebra.

## Requirements
- Moodle 3.5 or above
- JavaScript enabled in your browser
- Modern browser

## Installation
- Place the "geogebra" directory within `your_moodle_install/question/type/`
- Visit the admin notifications page and complete the installation
- Done!

## Usage as teacher
- Create a worksheet where there is at least one boolean variable which indicates whether the students solution is correct
- Upload the question to GeoGebraTube
- As a teacher, create a GeoGebra question in Moodle
- Supply the URL of the GeoGebraTube worksheet or choose the material using the file picker (only works with GeoGebraTube
repository installed)
- Load the Applet. Variables which could be randomized or can be used for checking correctness, will be extracted automatically
- Choose the fraction which goes with the boolean variable
- Save the question and use it for your quiz
