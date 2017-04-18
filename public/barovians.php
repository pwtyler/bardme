<?php
require_once dirname( __DIR__ ) .'/barovians.php';
$barovians = new Barovians();
include dirname( __DIR__ ) . '/html/top.php';
echo $barovians->generate('male');
echo $barovians->generate('female');
include dirname( __DIR__ ) . '/html/bottom.php';