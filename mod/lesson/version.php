<?php // $Id: version.php,v 1.35.2.2 2008/01/27 15:28:11 stronk7 Exp $
/**
 * Code fragment to define the version of lesson
 * This fragment is called by moodle_needs_upgrading() and /admin/index.php
 *
 * @version $Id: version.php,v 1.35.2.2 2008/01/27 15:28:11 stronk7 Exp $
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @package lesson
 **/

$module->version  = 2007020202;  // The current module version (Date: YYYYMMDDXX)
$module->requires = 2007020200;  // Requires this Moodle version
$module->cron     = 0;           // Period for cron to check this module (secs)

?>
