<?PHP // $Id: version.php,v 1.7 2007/02/02 13:02:29 moodler Exp $

/////////////////////////////////////////////////////////////////////////////////
///  Code fragment to define the version of lams
///  This fragment is called by moodle_needs_upgrading() and /admin/index.php
/////////////////////////////////////////////////////////////////////////////////

$module->version  = 2007020200;  // The current module version (Date: YYYYMMDDXX)
$module->requires = 2007020200;  // Requires this Moodle version
$module->cron     = 0;           // Period for cron to check this module (secs)

?>
