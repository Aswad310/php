<?php
############ DATE - TIME Functions ############
/* mktime :: Manual Date & Time */
echo date('m/d/Y g:ia', mktime(0,0,0,4,10,null)).'<hr />';

/* strtotime */
echo date('m/d/Y g:ia', strtotime('2021-01-18 07:00:00')).'<hr />';

echo date('m/d/Y g:ia', strtotime('tommarow')).'<hr />';

echo date('m/d/Y g:ia', strtotime('first day of february')).'<hr />';

echo date('m/d/Y g:ia', strtotime('first day of february previous year')).'<hr />';

############ date_parse() ############
$date2 = date('m/d/Y g:ia', strtotime('first day of february previous year')).'<hr />';

echo "<strong>Date Parse</strong>";
echo '<pre>';
// Returns associative array with detailed info about given date
print_r(date_parse($date2));
echo '</pre> <hr />';

echo "<strong>Date Parse From Format</strong>";
echo '<pre>';
// Get info about given date formatted according to the specified format
print_r(date_parse_from_format('m/d/Y g:ia', $date2));
echo '</pre>';
?>