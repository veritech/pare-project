<?php //$Id: block_rss_client_error.php,v 1.6 2005/08/11 12:45:38 dhawes Exp $
// Print an error page condition
require_once('../../config.php');

$error = required_param('error', PARAM_CLEAN);

print_header(get_string('error'), 
              get_string('error'), 
              get_string('error') );

print clean_text(urldecode($error));

print_footer();
?>