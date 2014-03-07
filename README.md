RestPHPFactory
==============

An extremely simple PHP framework with RESTful API. RestPHPFactory use JSON as data format.

# Prerequisite
You must have a Apache server running with PHP module and rewrite module set up to begin.
You may need `curl` for debug use.

# Get Started
1. Make a folder named `restserver` in your wwwroot library, copy everything to the folder.
2. Try `GET` to `http://localhost/restserver/example`

# How to use
Set your own interface by inherit class Process in `process/` , and add the class file to `process/all.php`. And add your interface in file `process/ProcessFactory.php`.
There are three functions in the Base class `Process`, say `doPost()`, `doGet()`, `doDel()`. You can decide what to override in your specific classes.
