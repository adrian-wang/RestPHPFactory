RestPHPFactory
==============

An extremely simple PHP framework with RESTful API.

# Prerequisite
You must have a Apache server running with PHP module and rewrite module set up to begin.

# Get Started
1. Copy the folder into your wwwroot library
2. try access http://localhost/login

# How to use
Set your own interface by inherit class Process in process/ , and add the class file to process/all.php. And add your interface in file process/ProcessFactory.php.
There are three functions in the Base class Process, say doPost(), doGet(), doDel(). You can decide what to override in specific class.
