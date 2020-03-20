<?php
header('Content-Type: application/pdf');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=".$_GET['name']);
readfile('tmp/'.$_GET['name']);
unlink('tmp/'.$_GET['name']);