<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>로그인</title>
  </head>
  <body>
    <?php
      if(!strcmp($_POST['id'], "123") && !strcmp($_POST['pw'], "456")){

         echo "성공!<br>";
         echo "<a href='chapter.php'>바로가기</a>";

      }
      else {
        echo "실패";
      }
    ?>
  </body>
</html>
