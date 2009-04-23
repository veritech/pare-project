<?php // $Id: version.php,v 1.56 2007/02/02 13:02:28 moodler Exp $

/////////////////////////////////////////////////////////////////////////////////
///  Code fragment to define the version of glossary
///  This fragment is called by moodle_needs_upgrading() and /admin/index.php
/////////////////////////////////////////////////////////////////////////////////

$module->version  = 2007020200;
$module->requires = 2007020200;  // Requires this Moodle version
$module->cron     = 0;           // Period for cron to check this module (secs)

?>
