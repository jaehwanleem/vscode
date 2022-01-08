<head><meta charset="utf-8"></head>
<?php
    session_start();

    $con= oci_connect("b689024", "test1234", "203.249.87.57:1521/orcl", "AL32UTF8");
    if (!$con) {
       exit();
    }
    $A_OWNER=$_POST["A_OWNER"];
    $A_ID=$_POST["A_ID"];
    $_SESSION['A_ID']=$A_ID;	
    $sql="SELECT A_ID from animal where A_ID='$A_ID' and A_OWNER='$A_OWNER'";

    $stat=oci_parse($con,$sql);
    oci_execute($stat);

    $ret=oci_fetch_array($stat,OCI_ASSOC);

    if($ret != false){
        $_SEEION['A_ID']=$_POST["A_ID"];
        echo "<script>alert(\"환영합니다\");</script>";
        echo "<script>document.location.href='home2.html';</script>";
    }
    else{
        echo "<script>alert(\"로그인에 실패했습니다\");</script>";
        echo "<script> document.location.href='login.php';</script>";
        exit;
    }

    oci_close($con);
?>
