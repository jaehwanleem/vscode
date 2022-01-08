<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="reservation.css">
    <link href="https://fonts.googleapis.com/earlyaccess/notosanskr.css" rel="stylesheet">

    <title>예약</title>
  </head>

  <body>
    

    <div class="intro">
      <div class="title">
        예약 삭제
      </div>

      <div class="subtitle">
        삭제하려는 날짜 시간을 입력해주세요.<br>
        예)2001년 1월 1일 오후 1시<br>
                01010113
      </div>
    </div>
      <div class="reservation-form">
        <form METHOD="POST" ACTION="delete_ok.php">
          <input type="text" name="R_DATE" class="text-field" placeholder="yy/mm/dd/hh">
          <input type="submit" value="예약삭제" class="submit-btn">
          
        </form>
        <div class="links">
          <a href="#"></a>
        </div>
      </div>
    </body>
</html>