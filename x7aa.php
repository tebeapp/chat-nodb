<?php
header("Content-type: text/plain; charset=utf-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
sleep(2);
  if(100 === 100) {$sonik00posthardx7ai=$_POST['area_1'];$tiket000x7ai= $_POST['data_0'] ;//
  $tiket000x7ai=(string)$tiket000x7ai;
  settype($tiket000x7ai, "string");
  $sonik00posthardx7ai=(string)$sonik00posthardx7ai;
  settype($sonik00posthardx7ai, "string");
}
$chatlogx7ai=$sonik00posthardx7ai;
$x7aichatindex='Интернет';
$_COOKIE["username"]==TRUE ? $x7aichatindex=$_COOKIE["username"]: NULL;
$tiket000x7ai==='x7ai?' ? $x7aichatindex='Анонимно' :NULL;


switch ($chatlogx7ai){//А может ответ пустой!
    case ''  : $chatlogx7ai=NULL.$x7aichatindex=NULL;break;
        default: 

		  $nickname = $x7aichatindex;
		  
			 $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
			
			  $message = $chatlogx7ai;
			
		 if(($message) != "\n"){
        	
			 if(preg_match($reg_exUrl, $message, $url)) {
       			$message = preg_replace($reg_exUrl, '<a href="'.$url[0].'" target="_blank">'.$url[0].'</a>', $message);
				} 
			 
        	
        	 fwrite(fopen('chat.txt', 'a'), "<span>". $nickname . "</span>" . $message = str_replace("\n", " ", $message) . "\n"); 
		 }  
  
$obx7ai=time();
$x0cx7aix=(string)$obx7ai;
$cncx7aic=$x0cx7aix[8];
switch($cncx7aic){
    case 7:
    $fcx7aip = fopen("chat.txt", "r+");
    ftruncate($fcx7aip, 0);
    fclose($fcx7aip);
    $fcx7aip = fopen("chat.txt", "w");
    fclose($fcx7aip);break;
    default : $fcx7aip=NULL ;
    
} break;
}



?>