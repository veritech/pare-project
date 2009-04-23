<?php  // $Id: defaults.php,v 1.2.2.2 2008/01/23 04:39:45 moodler Exp $
    if (empty($CFG->workshop_initialdisable)) {
        if (!count_records('workshop')) {
            set_field('modules', 'visible', 0, 'name', 'workshop');  // Disable it by default
            set_config('workshop_initialdisable', 1);
        }
    }

?>
