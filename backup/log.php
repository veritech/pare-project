<?php  // $Id: log.php,v 1.13.6.1 2007/09/08 22:39:23 stronk7 Exp $
       // log.php - old scheduled backups report. Now redirecting
       // to the new admin one

    require_once("../config.php");

    require_login();

    require_capability('moodle/site:backup', get_context_instance(CONTEXT_SYSTEM, SITEID));

    redirect("$CFG->wwwroot/$CFG->admin/report/backups/index.php", '', 'admin', 1);

?>
