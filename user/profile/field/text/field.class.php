<?php //$Id: field.class.php,v 1.5.2.1 2007/04/16 02:45:52 ikawhero Exp $

class profile_field_text extends profile_field_base {

    function edit_field_add(&$mform) {
        $size = $this->field->param1;
        $maxlength = $this->field->param2;

        /// Create the form field
        $mform->addElement('text', $this->inputname, format_string($this->field->name), 'maxlength="'.$maxlength.'" size="'.$size.'" ');
        $mform->setType($this->inputname, PARAM_MULTILANG);
    }

}

?>
