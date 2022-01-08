<?php
  $con= oci_connect("b689024", "test1234", "203.249.87.57:1521/orcl", "AL32UTF8");
  if (!$con) {
  exit();
  }
  session_start();

  $R_ID=$_SESSION['A_ID'];
  $R_DATE=$_POST['R_DATE'];
  $R_SYMPTOM=$_POST['R_SYMPTOM'];
  $DR_NAME1='ChoiYuJin';
  $DR_NAME2='JangGiBaek';
  $_SESSION['DR_NAME1']=$DR_NAME1;
  $_SESSION['DR_NAME2']=$DR_NAME2;
  $sql1="INSERT into reservation(R_DATE,R_ID,R_SYMPTOM)
    values('$R_DATE','$R_ID','$R_SYMPTOM')
    ";
  $doctor1="INSERT into reserve_doctor(DR_DATE,DR_NAME)
    values('$R_DATE','$DR_NAME1')";
  $doctor2="INSERT into reserve_doctor(DR_DATE,DR_NAME)
    values('$R_DATE','$DR_NAME2')";

  $stid=oci_parse($con,$sql1);
  $stid1=oci_parse($con,$doctor1);
  $stid2=oci_parse($con,$doctor2);

  $time=$R_DATE%100;

  if($time>=0 && $time <9){
      echo "<script>alert(\"오전 0시부터 8시까지는 예약을 할 수 없습니다.\");</script>";
      echo "<script>document.location.href='reservation.html';</script>";
  }
  else if($time>=9 && $time <16 ){
    $ret=oci_execute($stid);
    if($ret){
      oci_execute($stid1);
      echo "<script>alert(\"예약이 완료 되었습니다.\");</script>";
      echo "<script>document.location.href='home2.html';</script>";
  }
    else{
        echo "<script>alert(\"예약정보를 정확히 기입해주세요\");</script>";
        echo "<script>document.location.href='reservation.html';</script>";
    }
  }
  else if($time>=16 && $time <24 ){
    $ret=oci_execute($stid);
    if($ret){
      oci_execute($stid2);
      echo "<script>alert(\"예약이 완료 되었습니다.\");</script>";
      echo "<script>document.location.href='home2.html';</script>";
  }
    else{
        echo "<script>alert(\"예약정보를 정확히 기입해주세요\");</script>";
        echo "<script>document.location.href='reservation.html';</script>";
    }
  }
  oci_close($con);
?>