<?php
  $user='root';
  $pass='';
  $conn=new PDO('mysql:host=localhost;dbname=hospital', $user, $pass);
  
  $department = $_POST['department'];
  $doctor = $_POST['doctor'];
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  
  $s1=$conn->prepare('INSERT INTO appointments (department, doctor, name, mobile, date, time, status, active)
                      VALUES (:department, :doctor, :name, :mobile, :date, :time, :status, :active)');
  $ar1=['department'=>$department,'doctor'=>$doctor,'name'=>$name,'mobile'=>$mobile,'date'=>$date,'time'=>$time,'status'=>1,'active'=>1];
  if($s1->execute($ar1)){
    $ot1=1;
  }
  $s1=$conn=null;
  print $ot1;

?>