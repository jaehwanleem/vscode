
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>회원가입 양식</title>
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
    width: 800px;
    text-align: center;
    padding: 30px;
    border-bottom: 1px solid black;
    margin: auto;
    
    }
 
    table{
    margin-top: 100px;
    height: 300px;
    width: 700px;
    border-top: 1px solid black;
    margin-right: auto;
    margin-left: auto;
    }
 
    td{
    border-bottom: 1px dotted black;
    }
 
    caption{
    text-align: center;
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
    
    p{
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
        if(form.A_ID.value == "") {
            alert('동물 등록번호를 입력하세요.');
            form.A_ID.focus() ;
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
        if(form.A_BREED.value == "") {
            alert('종을 입력하세요.');
            form.A_BREED.focus() ;
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
        if(form.A_BIRTH.value == "") {
            alert('출생날짜를 입력하세요.');
            form.A_BIRTH.focus() ;
            return ;
        }
        if(form.A_BIRTH.value.length != 6) {
            alert('6자리로 입력해주세요.');
            form.A_BIRTH.focus() ;
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
        if(form.A_NEUTER.value !="y" && form.A.NEUTER.value !="n"){
		    alert('y/n 로 입력하세요.');
		    form.A_NEUTER.focus();
		    return;
        }

      
    }
 
  </script>
 </head>
 <body>
     <form METHOD="POST" ACTION="sign_in_ok.php">
        	<div class="container">
        	<div class="insert">
          	<table>
      	<caption><h2>회원가입</h2></caption>
      	<tr>
        	  <td class="col1">반려동물 이름</td>
          	<td class="col2"><input type="text" name="A_NAME" maxlength="50"></td>
      	</tr>
	<tr>
         	<td class="col1">동물 등록번호</td>
        	<td class="col2">
              	<input type="number" name="A_ID" id="aid" maxlength="30">
		
         	</td>
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
        	<td class="col2"><input type="text" name="A_BREED" maxlength="50"></td>
   	 </tr>
  	 <tr>
        	 <td class="col1">성별 ( m , f)</td>
         	<td class="col2"><input type="text" name="A_SEX" maxlength="50"></td>
  	 </tr>
    	 <tr>
        	 <td class="col1">출생날짜(6자리)</td>
         	<td class="col2"><input type="number" name="A_BIRTH" maxlength="8"></td>
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
          <a href="home1.html"><input class="but3" type="button" value="가입취소"></a>
	  <input class="but4" type="submit" value="회원가입" onclick="formCheck(this.form)" > 
      

    </div>
    </div>
   </form>
   </body>
  </html>
  
