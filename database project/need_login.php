<head>
</head>
<body>
<?php
    $con= oci_connect("b689024", "test1234", "203.249.87.57:1521/orcl", "AL32UTF8");
    if (!$con) {
       exit();
    }
    echo "<script>alert(\"로그인을 먼저 해주세요\");</script>";
    echo "<script>document.location.href='login.php';</script>";
?>

</body>