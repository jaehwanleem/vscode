
<?php
session_start();

$con= oci_connect("b689024", "test1234", "203.249.87.57:1521/orcl", "AL32UTF8");
if (!$con) {
  exit(); 
}

  $sql="SELECT * FROM doctor";

  $st = oci_parse($con,$sql);
  
  $ret=oci_execute($st);
if($ret!=false){  
  echo "<h1>프렌즈 동물병원 의료진 목록</h1><br><br>";
  echo "<TABLE border=1>";
  echo "<TR>";
  echo "<TH>이름</TH><TH>학력</TH><TH>전공</TH>";
  echo "</TR>";
  while(($row=oci_fetch_array($st))!=false){
	  echo "<TR>";
    echo "<TD>",$row["D_NAME"], "</TD>";
    echo "<TD>",$row["D_EDUCATION"], "</TD>";
    echo "<TD>",$row["D_MAJOR"], "</TD>";
    echo "</TR>";
  }
  echo "</TABLE>";
  echo "<div class='create'>";
  echo "<a href='home2.html'><input class='but4' type='button' value='홈으로'></a>";
  echo "</div>";
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
      margin-left: 470px;
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
