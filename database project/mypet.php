<?php
    session_start();
    $con= oci_connect("b689024", "test1234", "203.249.87.57:1521/orcl", "AL32UTF8");
    if (!$con) {
       exit();
    }
    $A_ID=$_SESSION['A_ID'];
    $sql="SELECT * FROM animal WHERE A_ID='$A_ID'";
    $stid=oci_parse($con,$sql);
    oci_execute($stid);
    $row=oci_fetch_array($stid);
    $A_ID=$row["A_ID"];
    $A_NAME=$row["A_NAME"];
    $A_BIRTH=$row["A_BIRTH"];
    $A_BREED=$row["A_BREED"];
    $A_COLOR=$row["A_COLOR"];
    $A_SEX=$row["A_SEX"];
    $A_NEUTER=$row["A_NEUTER"];
    $A_OWNER=$row["A_OWNER"];
    $A_OWNER_P=$row["A_OWNER_P"];
    oci_close($con);
?>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>MyInformation</title>
  <style type="text/css">


* {
    box-sizing: border-box;
    font-family: 'Noto Sans KR', sans-serif;
    border-radius: 5px;
  }

      div.container{
    }

      div.insert{
    }
    div.create{
    
    
    width: 600px;
    text-align: center;
    padding: 30px;
    border-bottom: 1px solid black;
    margin: auto;
    }

    table{
    margin-top: 100px;
    height: 300px;
    width: 400px;
    border-top: 3px solid black;
    margin-right: auto;
    margin-left: auto;
    
    }

    td{
    border-bottom: 1px dotted black;
    }

    caption{
    text-align: left;
    }

    .col1 {
    background-color: #6096dd;
    padding: 10px;
    text-align: right;
    font-weight: bold;
    font-size: 0.8em;
    color: white;
    }
    .col2 {
    text-align: left;
    padding: 5px;
    }

    .but1 {
    height: 25px;
    width: 80px;
    color: white;
    background-color: black;
    border-color: black;
    }

    .but2 {
    height: 27px;
    width: 120px;
    color: white;
    background-color: black;
    border-color: black;
    }

    .but3 {
    height: 35px;
    width: 150px;
    background-color: white;
    border: 2px solid black;
    }

    .but4{
    height: 35px;
    width: 150px;
    background-color: white;
    border: 2px solid black;
    }

    .but1:hover {
    background-color: #b9b9b9;
    color: black;
    border: 2px solid black;
    }

    .but2:hover {
    background-color: #b9b9b9;
    color: black;
    border: 2px solid black;
    }

    .but3:hover { 
     background-color: black;
    color: white;
    border: 2px solid black;
    }

    .but4:hover {
    background-color: black;
    color: white;
    border: 2px solid black;
    }

    .p{
    font-size: 0.7em;
    }

    .g{
    font-size: 0.7em;
    }

    .c{
    font-size: 0.7em;
    }

    .a{
    font-size: 0.7em;
    }

    .num{
    color: red;
    }

  </style>
 </head>
     <body>
            <div class="container">
            <div class="insert">
            <table>
	    <caption><h2>회원정보</h2></caption>
            <tr>
                      <td class="col1">반려동물 이름</td>
		                  <td class="col2"><?php echo $A_NAME ?></td>
            </tr>
            <tr>
                      <td class="col1">동물 등록번호</td>
		                <td class="col2"><?php echo $A_ID ?></td>
             </tr>
             <tr>
                      <td class="col1">보호자명</td>
		                  <td class="col2"><?php echo $A_OWNER?></td>
             </tr>
             <tr>
                      <td class="col1">보호자 연락처</td>
                      <td class="col2"><?php echo $A_OWNER_P ?> </td>
             </tr>
             <tr>
                      <td class="col1">종</td>
                      <td class="col2"><?php echo $A_BREED ?> </td>
             </tr>
             <tr>
                      <td class="col1">성별 ( m , f)</td>
                      <td class="col2"><?php echo $A_SEX ?> </td>
             </tr>
             <tr>
                      <td class="col1">출생날짜(6자리)</td>
                      <td class="col2"><?php echo $A_BIRTH ?></td>
             </tr>
             <tr>
                      <td class="col1">색깔</td>
                      <td class="col2"><?php echo $A_COLOR ?> </td>
             </tr>
             <tr>
                      <td class="col1">중성화 여부 ( y , n )</td>
                      <td class="col2"><?php echo $A_NEUTER ?> </td>
            </tr>
            </table>
            </div>
	    <div class="create">
	            <a href="home2.html"><input class="but4" type="button" value="홈으로"></a>
              <a href="update.php"><input class="but4" type="submit" value="회원정보수정"></a>
             </div>
	     </div>
     </body>
</html>
