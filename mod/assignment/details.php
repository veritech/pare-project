<?php // $Id: details.php,v 1.6 2006/08/28 08:42:30 toyomoyo Exp $
      // This script prints the setup screen for any assignment
      // It does this by calling the setup method in the appropriate class

    require_once("../../config.php");
    require_once("lib.php");

    if (!$form = data_submitted($CFG->wwwroot.'/course/mod.php')) {
        error("This script was called wrongly");
    }

    if (!$course = get_record('course', 'id', $form->course)) {
        error("Non-existent course!");
    }

    require_login($course->id);

    if (!has_capability('moodle/course:manageactivities', get_context_instance(CONTEXT_COURSE, $form->course))) {
        redirect($CFG->wwwroot.'/course/view.php?id='.$course->id);
    }

    $form->assignmenttype = clean_param($form->assignmenttype, PARAM_SAFEDIR);

    require_once("$CFG->dirroot/mod/assignment/type/$form->assignmenttype/assignment.class.php");

    $assignmentclass = "assignment_$form->assignmenttype";

    $assignmentinstance = new $assignmentclass();

    echo $assignmentinstance->setup($form);     /// The actual form is all printed here


?>
