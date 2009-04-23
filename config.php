<?php  /// Moodle Configuration File 

unset($CFG);

$CFG->dbtype    = 'mysql';
$CFG->dbhost    = 'localhost:8889';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'root';
$CFG->dbpersist =  false;
$CFG->prefix    = 'mdl_';

$CFG->wwwroot   = 'http://localhost:8888/pare';
$CFG->dirroot   = '/Users/jonathan/Dev/Web/PARE';
$CFG->dataroot  = '/Users/jonathan/dev/web/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 00777;  // try 02777 on a server in Safe Mode

$CFG->unicodedb = true;  // Database is utf8

require_once("$CFG->dirroot/lib/setup.php");
// MAKE SURE WHEN YOU EDIT THIS FILE THAT THERE ARE NO SPACES, BLANK LINES,
// RETURNS, OR ANYTHING ELSE AFTER THE TWO CHARACTERS ON THE NEXT LINE.
?>