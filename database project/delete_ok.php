<?php

    $con= oci_connect("b689024", "test1234", "203.249.87.57:1521/orcl", "AL32UTF8");
    if (!$con) {
            exit();
    }
    $R_DATE=$_POST['R_DATE'];

    $sql1="DELETE from reservation where R_DATE='$R_DATE'";
    $stid1=oci_parse($con,$sql1);
    $ret1=oci_execute($stid1);

    

    if($ret1){
        echo "<script>alert(\"예약취소가 완료 되었습니다.\");</script>";
        echo "<script>document.location.href='home2.html';</script>";
    }else{
        echo "<script>alert(\"해당 예약정보가 없습니다.\");</script>";
        echo "<script>document.location.href='home2.html';</script>";
    }

    session_destroy();
    oci_close($con);

?>