<?php
  include 'element.php';
  // $department = $_POST['department'];
  // $doctor = $_POST['doctor'];
  // $name = $_POST['name'];
  // $mobile = $_POST['mobile'];
  // $date = $_POST['date'];
  // $time = $_POST['time'];
  // $id = $_POST['id'];
  $department = $_POST['data'][0];
  $doctor = $_POST['data'][1];
  $name = $_POST['data'][2];
  $mobile = $_POST['data'][3];
  $date = $_POST['data'][4];
  $time = $_POST['data'][5];
  $id = $_POST['data'][6];
  // print_r($_POST['data']);
  $s1=$conn->prepare('UPDATE appointments SET department=:department, doctor=:doctor, name=:name, mobile=:mobile, date=:date, time=:time WHERE id = :id');
  $ar1=['department'=>$department,'doctor'=>$doctor,'name'=>$name,'mobile'=>$mobile,'date'=>$date,'time'=>$time,'id'=>$id];
  if($s1->execute($ar1)){
    $ot1=1;
  }
  $s1=$conn=null;
  print $ot1;

?>