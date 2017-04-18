<?php
require_once dirname( __DIR__ ) .'/barovians.php';
$barovians = new Barovians();
$title = 'Names for all you meet in Barovia';
include dirname( __DIR__ ) . '/html/top.php';
echo $barovians->generate('male');
echo $barovians->generate('female');
include dirname( __DIR__ ) . '/html/bottom.php';