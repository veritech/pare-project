<?php  //$Id: upgrade.php,v 1.3.2.1 2009/01/08 01:09:47 jerome Exp $

// This file keeps track of upgrades to
// the data module
//
// Sometimes, changes between versions involve
// alterations to database structures and other
// major things that may break installations.
//
// The upgrade function in this file will attempt
// to perform all the necessary actions to upgrade
// your older installtion to the current version.
//
// If there's something it cannot do itself, it
// will tell you what you need to do.
//
// The commands in here will all be database-neutral,
// using the functions defined in lib/ddllib.php

function xmldb_data_upgrade($oldversion=0) {

    global $CFG, $THEME, $db;

    $result = true;

/// And upgrade begins here. For each one, you'll need one
/// block of code similar to the next one. Please, delete
/// this comment lines once this file start handling proper
/// upgrade code.

/// if ($result && $oldversion < YYYYMMDD00) { //New version in version.php
///     $result = result of "/lib/ddllib.php" function calls
/// }

    if ($result && $oldversion < 2006121300) {

    /// Define field format to be added to data_comments
        $table = new XMLDBTable('data_comments');
        $field = new XMLDBField('format');
        $field->setAttributes(XMLDB_TYPE_INTEGER, '2', XMLDB_UNSIGNED, XMLDB_NOTNULL, null, null, null, '0', 'content');

    /// Launch add field format
        $result = $result && add_field($table, $field);

    }

    ///Display a warning message about "Required Entries" fix from MDL-16999
    if ($result && $oldversion < 2007022602) {
        if (!get_config('data', 'requiredentriesfixflag')) {
            set_config('requiredentriesfixflag', true, 'data'); // remove old flag

            $databases = get_records_sql("SELECT d.*, c.fullname
                                              FROM {$CFG->prefix}data d, {$CFG->prefix}course c
                                              WHERE d.course = c.id
                                              AND (d.requiredentries > 0 OR d.requiredentriestoview > 0)
                                              ORDER BY c.fullname, d.name");
            if (!empty($databases)) {
                $a = new object();
                $a->text = '';
                foreach($databases as $database) {
                    $a->text .= "<p>".$database->fullname." - " .$database->name. " (course id: ".$database->course." - database id: ".$database->id.")</p>";
                }
                notify(get_string('requiredentrieschanged', 'data', $a));
            }
        }
    }


    return $result;
}

?>
