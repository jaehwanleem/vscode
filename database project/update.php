<!DOCTYPE html>
<?php
    session_start();
    $con= oci_connect("b689024", "test1234", "203.249.87.57:1521/orcl", "AL32UTF8");
    if (!$con) {
       exit();
    }
    $sql="SELECT * FROM animal WHERE A_ID=".$_SESSION['A_ID']."";
    $stid=oci_parse($con,$sql);
    oci_execute($stid);
    $row=oci_fetch_array($stid);
    $A_ID=$row["A_ID"];
    $A_BIRTH=$row["A_BIRTH"];
    $A_BREED=$row["A_BREED"];
    oci_close($con);
?>

<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>회원정보수정</title>
  <style type="text/css">

      div.container{
    }

      div.insert{
    }
    div.create{
    width: 800px;
    text-align: center;
    padding: 30px;
    border-bottom: 1px solid black;
    margin: auto;
    }

    table{
    margin-top: 100px;
    height: 300px;
    width: 900px;
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
    background-color: #e8e8e8;
    padding: 10px;
    text-align: right;
    font-weight: bold;
    font-size: 0.8em;
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
<script>
    function formCheck(form) {
        //유효성 검사
        if(form.A_NAME.value == "") {
            alert('반려동물 이름을 입력하세요.');
            form.A_NAME.focus() ;
            return ;
        }
        if(form.A_OWNER.value == "") {
            alert('보호자 이름을 입력하세요.');
            form.A_OWNER.focus() ;
 	    return ;
        }
        if(form.A_OWNER_P.value == "") {
            alert('보호자 연락처를 입력하세요.');
            form.A_OWNER_P.focus() ;
            return ;
        }
        if(form.A_SEX.value == "") {
            alert('성별을 입력하세요.');
            form.A_SEX.focus() ;
            return ;
        }
        if(form.A_SEX.value != "m" && form.A_SEX.value != "f") {
            alert('m/f 로 입력해주세요.');
            form.A_SEX.focus() ;
            return ;
        }
        if(form.A_COLOR.value == "") {
            alert('색깔을 입력하세요.');
            form.A_COLOR.focus() ;
            return ;
        }
        if(form.A_NEUTER.value == "") {
            alert('중성화 여부를 입력하세요.');
            form.A_NEUTER.focus() ;
            return ;
        }
        if(form.A_NEUTER.value != "y" && form.A_NEUTER.value != "n") {
            alert('y/n 로 입력하세요.');
            form.A_NEUTER.focus() ;
            return ;
        }
    }

  </script>

 </head>
 <body>
        <div class="container">
        <div class="insert">
        <table>
        <form METHOD="POST" ACTION="update_ok.php">
            <caption><h2>정보수정</h2></caption>
            <tr>
                    <td class="col1">반려동물 이름</td>
                    <td class="col2"><input type="text" name="A_NAME" maxlength="50"></td>
            </tr>
            <tr>
                    <td class="col1">동물 등록번호</td>
                    <td class="col2"><?php echo $A_ID ?></td>
            </tr>
            <tr>
                    <td class="col1">보호자명</td>
                    <td class="col2"><input type="text" name="A_OWNER" maxlength="50"></td>
            </tr>
            <tr>
                    <td class="col1">보호자 연락처</td>
                    <td class="col2"><input type="text" name="A_OWNER_P" maxlength="50"></td>
            </tr>
            <tr>
                    <td class="col1">종</td>
                    <td class="col2"><?php echo $A_BREED ?></td>
            </tr>
            <tr>
                    <td class="col1">성별 ( m , f)</td>
                    <td class="col2"><input type="text" name="A_SEX" maxlength="50"></td>
            </tr>
            <tr>
                    <td class="col1">출생날짜(6자리)</td>
                    <td class="col2"><?php echo  $A_BIRTH ?></td>
            </tr>
            <tr>
                    <td class="col1">색깔</td>
                    <td class="col2"><input type="text" name="A_COLOR" maxlength="50"></td>
            </tr>
            <tr>
                    <td class="col1">중성화 여부 ( y , n )</td>
                    <td class="col2"><input type="text" name="A_NEUTER" maxlength="50"></td>
            </tr>
            </table>
            </div>
            <div class="create">
            <a href="mypet.php"><input class="but3" type="button" value="수정취소"></a>
            <input class="but3" type="submit" value="수정완료" onclick="formCheck(this.form)">
            </div>
            </div>
         </form>
 </body>

</html>
