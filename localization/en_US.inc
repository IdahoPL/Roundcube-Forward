<?php

/* Author: Gianluca Giacometti */

$labels = array();
$labels['forward'] = 'Forward';
$labels['forwardforwards'] = 'Forward addresses (separated by "," commas, ";" semicolons or new lines) \n eg: email@email.com,email2@email2.com';
$labels['forwardkeepcopies'] = 'Keep copies of original messages';

$messages = array();
$messages['forwardinvalidforwards'] = 'E-mail address not valid';
$messages['forwardnovalidforwards'] = 'No valid forward address';
$messages['forwardsuccessfullysaved'] = 'Forward addresses successfully saved';
$messages['forwarddriverconnecterror'] = 'Driver connection error';
$messages['forwarddriverprocesserror'] = 'Driver execution error';
$messages['forwardinternalerror'] = 'Driver reading error';

?>
