<?php
$pattern = '#a[a-z]b#';
$replacement = 0;
$subject = 'ahb acb aeb aeeb adcd axeb'; 
$res = preg_replace($pattern, $replacement, $subject);
echo($res);


$pattern = '#a[b]{0,}a#';
$replacement = 0;
$subject = 'aa aba abba abbba abca abea'; 
$res = preg_replace($pattern, $replacement, $subject);
echo($res);

$pattern = '#a[b]{1}a#';
$replacement = 0;
$subject = 'aa aba abba abbba abca abea'; 
$res = preg_replace($pattern, $replacement, $subject);
echo($res);

$pattern = '#ab{1,}#';
$replacement = 0;
$subject = 'aa abab abab abababab abea'; 
$res = preg_replace($pattern, $replacement, $subject);
echo($res);

$pattern = '#2[+]{1,}3#';
$replacement = 0;
$subject = '23 2+3 2++3 2+++3 345 567'; 
$res = preg_replace($pattern, $replacement, $subject);
echo($res);

$pattern = '#a[b]{3,}a#';
$replacement = 0;
$subject = 'aa aba abba abbba abbbba abbbbba'; 
$res = preg_replace($pattern, $replacement, $subject);
echo($res);