<?php
/**
 * Created by PhpStorm.
 * User: BearShake
 * Date: 28.03.2018
 * Time: 20:03
 */

require_once 'connection.php';
include 'SimpleQueryExecute.php';

$dbobj = new SimpleQueryExecute($host,$user, $password, $database);

//Return string with the text from db by tag
$dbobj->SelectWhereQuery('insert_texts', 'text', 'preview');

//Close override method
$dbobj->closeCon();


