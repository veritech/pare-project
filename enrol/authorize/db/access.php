<?php // $Id: access.php,v 1.5.4.1 2007/03/05 11:38:20 skodak Exp $

$enrol_authorize_capabilities = array(

    'enrol/authorize:managepayments' => array(
        'riskbitmask' => RISK_PERSONAL,
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'legacy' => array(
            'admin' => CAP_ALLOW
        )
    ),

    'enrol/authorize:uploadcsv' => array(
        'riskbitmask' => RISK_XSS,
        'captype' => 'write',
        'contextlevel' => CONTEXT_USER,
        'legacy' => array(
            'admin' => CAP_ALLOW
        )
    )

);

?>
