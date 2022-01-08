<head><meta content="text/html; charset=utf-8"></head>
<?php
     session_start();
     $con= oci_connect("b689024", "test1234", "203.249.87.57:1521/orcl", "AL32UTF8");
     if (!$con) {
       exit(); 
     }
    $R_ID=$_SESSION['A_ID'];
    $sql="SELECT * from reservation where R_ID='$R_ID' ORDER BY R_DATE";
    $rowcount=0;

    $stat=oci_parse($con,$sql);
    $ret=oci_execute($stat);
    
    $DR_NAME1='ChoiYuJin';
    $DR_NAME2='JangGiBaek';
    if($ret!=false){
        echo "<h1>예약 정보</h1>";
        echo "<TABLE border=1>";
        echo "<TR>";
        echo "<TH>예약 일시</TH><TH>반려동물 ID</TH><TH>증상</TH><TH>담당의사</TH>";
        echo "</TR>";
        while(($row=oci_fetch_array($stat))!=false){
                $time=$row["R_DATE"]%100;
                echo "<TR>";
                echo "<TD>",$row["R_DATE"], "</TD>";
                echo "<TD>",$row["R_ID"], "</TD>";
                echo "<TD>",$row["R_SYMPTOM"], "</TD>";
                if($time>=9 && $time<16){
                    echo "<TD>",$DR_NAME1, "</TD>";
                }
                else if($time>=16 && $time<24){
                    echo "<TD>",$DR_NAME2, "</TD>";
                }
                echo "</TR>";
                $rowcount++;   
        }
        echo "</TABLE>";

        echo "<div class='create'>";
        echo "<a href='home2.html'><input class='but4' type='button' value='홈으로'></a>";
        echo "<a href='delete.php'><input class='but4' type='button' value='예약내역 삭제'></a>";
        echo "</div>";
        echo "<h4>총 $rowcount 건이 조회되었습니다</h4>";

        
    }else{
        echo "<h4>예약 내역이 없습니다.</h4>";
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

