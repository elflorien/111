<!DOCTYPE html>
<?php
  $send = !empty($_GET['send']);
 if($send){
  $name = $_GET['name'];
  $surname = $_GET['surname'];
  $patronymic = $_GET['patronymic'];
  $gender = $_GET['gender'];
  $age = $_GET['age'];
  $faculty = $_GET['faculty'];
   echo 'форма отправлена';
 }
 //hhhh
  $connect = mysqli_connect('localhost', 'root', '', 'students');
   if($connect){
    echo 'база подключена';
   }
  mysqli_query($connect, "INSERT INTO students SET name='".mysqli_real_escape_string($connect,$name)."', surname='".mysqli_real_escape_string($connect,$surname)."', patronymic='".mysqli_real_escape_string($connect,$patronymic)."', gender='".mysqli_real_escape_string($connect,$gender)."', age='".mysqli_real_escape_string($connect,$age)."', faculty='".mysqli_real_escape_string($connect,$faculty)."'");
?> 
<html>
 <head>
  <title>Форма добавления студентов</title>
  <meta charset="utf-8">
 </head>
 <body>
  <h2 ALIGN="center">форма добавления студента</h2>
  <form id="studentsform" action="" method ="GET">
   <div></br>
    Имя<br/>
    <input name="name" type="text" value="имя"> 
   </div>   
   <div></br>
    Фамилия<br/>
    <input name="surname" type="text" value="фамилия">     
   </div>   
   <div></br>
    Отчество<br/>
    <input name="patronymic" type="text" value="отчество">     
   </div>   
   <div></br>
    Пол<br/>
    М<input name="gender" type="radio" value="мужской пол">     
    Ж<input name="gender" type="radio" value="женский пол">     
   </div>
   <div></br>
    Возраст<br/>    
    <SELECT NAME="age">
     <OPTION VALUE="null" SELECTED>не указан
     <OPTION VALUE="">1980
     <OPTION VALUE="">1981
     <OPTION VALUE="">1982
     <OPTION VALUE="">1983
     <OPTION VALUE="">1984
     <OPTION VALUE="">1985
     <OPTION VALUE="">1986
     <OPTION VALUE="">1987 
     <OPTION VALUE="">1988
     <OPTION VALUE="">1989
     <OPTION VALUE="">1990
     <OPTION VALUE="">1991
     <OPTION VALUE="">1992
     <OPTION VALUE="">1993
     <OPTION VALUE="">1994
     <OPTION VALUE="">1995
     <OPTION VALUE="">1996
     <OPTION VALUE="">1997
     <OPTION VALUE="">1998
    </SELECT>    
   </div>   
   <div></br>
    Факультет<br/>
    <SELECT NAME="faculty">
     <OPTION VALUE="null" SELECTED>не указан
     <OPTION VALUE="building">строительный
     <OPTION VALUE="OilandGas">Нефти и газа
     <OPTION VALUE="economic">Экономический
     <OPTION VALUE="architectural">Архитектурный
    </SELECT>    
   </div>   
   <div></br>
   <INPUT name="send" TYPE="submit" VALUE="отправить"> 
   </div>
  </form>
 </body>
 
</html>