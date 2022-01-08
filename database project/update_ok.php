<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    session_start();
    $con= oci_connect("b689024", "test1234", "203.249.87.57:1521/orcl", "AL32UTF8");
    if (!$con) {
       exit();
    }

    $A_NAME=$_POST['A_NAME'];
    $A_OWNER=$_POST['A_OWNER'];
    $A_OWNER_P=$_POST['A_OWNER_P'];
    $A_SEX=$_POST['A_SEX'];
    $A_COLOR=$_POST['A_COLOR'];
    $A_NEUTER=$_POST['A_NEUTER'];
    $sql="UPDATE animal SET A_NAME='$A_NAME', A_OWNER='$A_OWNER', A_OWNER_P='$A_OWNER_P',
        A_SEX='$A_SEX',A_COLOR='$A_COLOR',A_NEUTER='$A_NEUTER' WHERE A_ID=".$_SESSION['A_ID']."";
    $stid=oci_parse($con,$sql);
    $ret=oci_execute($stid);
    if($ret){
        echo "<script>alert(\"회원정보가 수정 되었습니다.\");</script>";
        echo "<script>document.location.href='mypet.php';</script>";
    }else{
        echo "<script>alert(\"수정정보를 정확히 기입해주세요\");</script>";
        echo "<script>document.location.href='update.php';</script>";
    }

    oci_close($con);
?>

