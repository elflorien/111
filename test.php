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
   echo '����� ����������';
 }
 //hhhh
  $connect = mysqli_connect('localhost', 'root', '', 'students');
   if($connect){
    echo '���� ����������';
   }
  mysqli_query($connect, "INSERT INTO students SET name='".mysqli_real_escape_string($connect,$name)."', surname='".mysqli_real_escape_string($connect,$surname)."', patronymic='".mysqli_real_escape_string($connect,$patronymic)."', gender='".mysqli_real_escape_string($connect,$gender)."', age='".mysqli_real_escape_string($connect,$age)."', faculty='".mysqli_real_escape_string($connect,$faculty)."'");
?> 
<html>
 <head>
  <title>����� ���������� ���������</title>
  <meta charset="utf-8">
 </head>
 <body>
  <h2 ALIGN="center">����� ���������� ��������</h2>
  <form id="studentsform" action="" method ="GET">
   <div></br>
    ���<br/>
    <input name="name" type="text" value="���"> 
   </div>   
   <div></br>
    �������<br/>
    <input name="surname" type="text" value="�������">     
   </div>   
   <div></br>
    ��������<br/>
    <input name="patronymic" type="text" value="��������">     
   </div>   
   <div></br>
    ���<br/>
    �<input name="gender" type="radio" value="������� ���">     
    �<input name="gender" type="radio" value="������� ���">     
   </div>
   <div></br>
    �������<br/>    
    <SELECT NAME="age">
     <OPTION VALUE="null" SELECTED>�� ������
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
    ���������<br/>
    <SELECT NAME="faculty">
     <OPTION VALUE="null" SELECTED>�� ������
     <OPTION VALUE="building">������������
     <OPTION VALUE="OilandGas">����� � ����
     <OPTION VALUE="economic">�������������
     <OPTION VALUE="architectural">�������������
    </SELECT>    
   </div>   
   <div></br>
   <INPUT name="send" TYPE="submit" VALUE="���������"> 
   </div>
  </form>
 </body>
 
</html>