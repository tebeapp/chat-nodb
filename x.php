<?php header("Content-type: text/html; charset=UTF-8");usleep(50000);//0.05s
if (!empty($_GET['chat'])){
$file = file_get_contents('chat.txt', true);
exit($file); 
}
setcookie("username","Николай Басков",time()+300);//Представим на 5 мин что у нас есть пользователь в качестве теста после обновления страницы запуститца пользователь
//не каких элеменотов защиты и фильтрации в примере нет так как это пример
if (!empty($_POST['x'])){
$ts=$_POST['x'];
$ts=json_decode($ts);
//var_dump($ts); отладчик
$tik=$ts->{'data_3'};
$tok=$ts->{'meta_0'};
echo "<a href='https://tebe.app/tebe.htm'  ><img style='width: 32px; height: 32px; ' alt='tebe.app' src='https://tebe.app/tebeapp-w256.png' ></a> ".$tok;
$_COOKIE["username"]==TRUE ? $nickname=$_COOKIE["username"]: $nickname='Интернет';
$tik===true ? $nickname='Анонимно' :NULL;
fwrite(fopen('chat.txt', 'a'), "<p class='tritonbox'>". $nickname."<br>".$tok."<br>"."</p>");
}
$obx7ai=time();//сборщик мусора файловой системы
$xx=(string)$obx7ai;
$cc=$xx[8];
switch($cc){
    case 7:
    $fp = fopen("chat.txt", "r+");
    ftruncate($fp, 0);
    fclose($fp);
    $fp = fopen("chat.txt", "w");
    fclose($fp);break;
    default : $fp=NULL;
}
?>
