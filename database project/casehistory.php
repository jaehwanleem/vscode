<head><meta content="text/html; charset=utf-8"></head>
<?php
     session_start();
     $con= oci_connect("b689024", "test1234", "203.249.87.57:1521/orcl", "AL32UTF8");
     if (!$con) {
       exit(); 
     }

    $C_A_ID=$_SESSION['A_ID'];

    $sql="SELECT *  from casehistory natural join prescribehistory where C_NUM=P_C_NUM AND C_A_ID=$C_A_ID ORDER BY C_NUM";
    $rowcount=0;

    $stid=oci_parse($con,$sql);
    $ret=oci_execute($stid);
    if($ret!=false ){
        echo "<h1>진료/처방 정보</h1>";
        echo "<TABLE border=1>";
        echo "<TR>";
        echo "<TH>진료 번호</TH><TH>반려동물 ID</TH><TH>담당의사</TH><TH>병명</TH><TH>결과</TH>
            <TH>처방약</TH><TH>복용기간</TH><TH>복용횟수</TH>";
        echo "</TR>";
        while(($row=oci_fetch_array($stid))!=false){
            
            echo "<TR>";
            echo "<TD>",$row["C_NUM"],"</TD>";
            echo "<TD>",$row["C_A_ID"],"</TD>";
            echo "<TD>",$row["C_D_NAME"],"</TD>";
            echo "<TD>",$row["C_DISEASE"],"</TD>";
            echo "<TD>",$row["C_RESULT"],"</TD>";
            echo "<TD>",$row["P_DRUG_NAME"],"</TD>";
            echo "<TD>",$row["P_DRUG_PERIOD"],"</TD>";
            echo "<TD>",$row["P_DRUG_NUMBER"],"</TD>";
            echo "</TR>";
            $rowcount++;
        }
        echo "</TABLE>";

        echo "<div class='create'>";
        echo "<a href='home2.html'><input class='but4' type='button' value='홈으로'></a>";
        echo "</div>";
        echo "<h4>총 $rowcount 건이 조회되었습니다</h4>";

        
    }

    

    
        
        

 
    oci_close($con);

    
?>

<style>

    * {
        box-sizing: border-box;
        font-family: 'Noto Sans KR', sans-serif;
        border-radius: 6px;
    }

    div.create{
    
    
    width: 600px;
    text-align: center;
    padding: 30px;
    border-bottom: 1px solid black;
    margin: auto;
    }

    .but4{
    height: 35px;
    width: 150px;
    background-color: white;
    border: 2px solid black;
    }
    .but4:hover {
    background-color: black;
    color: white;
    border: 2px solid black;
    }

    h1{
     text-align: center;

    }

    h4{
      text-align:center;
    }
    

    body {
        margin-top:100px;

        font-family: Consolas, monospace;
        font-family: 12px;
       }

   
    table {
        width: 600px;
        margin:auto;
        
    }

    
   
    th {

       
        padding: 10px;
        border-bottom: 1px solid #dadada;
        background: #6096dd;
        color: white;
        
    }
    

    td{
      padding: 10px;
      border-bottom: 1px solid #dadada;
      
    }
</style>