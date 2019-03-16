<?php

if (!empty($_POST["aname"])&&!empty($_POST["sname"])){
    echo "СПАСИБО ЗА ЗАПОЛНЕННУЮ ФОРМУ";

}
else {
    echo "Заполните пожалуйста форму полностью";
}

$myName = $_POST["aname"];
$myUserName = $_POST["sname"]; 


  $myFile = "mishka.txt";
  //показывааем что файл открыт для приема, для записи в него    w - это значит что файл мы будем создавать если его нету. Если файл вдруг закрыт или защищен от записи не админами и не уследили то действите завершится ошибкой и соответственно будет die
  $fh = fopen($myFile, 'w') or die("can't open file"); 
  $stringData = $myName;
  fwrite($fh, $stringData);
  $stringData = $myUserName;
  fwrite($fh, $stringData);
  fclose($fh);

?>