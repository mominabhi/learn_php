<?php
include "student.php";
$obj=new student();
$user_id=$_GET['id'];
$obj->delete($user_id);