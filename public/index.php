<?php
require_once dirname( __DIR__ ) .'/bardme.php';
$bard = new BardMe();
$title = 'When Your Bard Needs to Mock and/or Inspire';
include dirname( __DIR__ ) . '/html/top.php';
echo $bard->insult();
echo $bard->inspire();
include dirname( __DIR__ ) . '/html/bottom.php';