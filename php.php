<html>
<head>
<link rel="shortcut icon" href="logo.png">
<style type="text/css">
body{
	margin-top: 0;
}
p{
	font-size: 22px;
	padding-left: 50px;
	padding-right: 50px;
	text-align: center;
}
.pad{
	text-align: center;
	font-size: 22px;
	padding-left: 150px;
	padding-right: 150px;
}
.img{
height: 450px;
width: 30px;
}
</style>
</head>
<body>
<br><p>
<?php
	
	$s=3;
	
	$intr1=$_POST["intr1"];
	$intr2=$_POST["intr2"];
	$intr3=$_POST["intr3"];
	$intr4=$_POST["intr4"];
	$intr5=$_POST["intr5"];
	$intr6=$_POST["intr6"];
	$intr7=$_POST["intr7"];
	$intr8=$_POST["intr8"];
	$intr9=$_POST["intr9"];
	
	$tifani=$_POST["tifani"];
	$compozitoare=$_POST["compozitoare"];
	$americana=$_POST["americana"];
	$optunu=$_POST["81"];
	$cincisapte=$_POST["57"];
	$romana=$_POST["romana"];
	$griargintie=$_POST["griargintie"];
	$mare=$_POST["mare"];
	$foitele=$_POST["foitele"];
	$lambriuri=$_POST["lambriuri"];
	$fonica=$_POST["fonica"];
	$intoxicatie=$_POST["intoxicatie"];
	$vertebrelor=$_POST["vertebrelor"];
	$marirea=$_POST["marirea"];
	$debut=$_POST["debut"];
	$greu=$_POST["greu"];
	
	$cas1=$_POST["cas1"];
	$cas2=$_POST["cas2"];
	$cas3=$_POST["cas3"];
	$cas4=$_POST["cas4"];
	$cas5=$_POST["cas5"];
	
	echo "<p align='center'>Iat&#259; performan&#355;a ta. <br>
	La &#238;ntreb&#259;rile r&#259;spunse corect se va afi&#351;a OK, iar numerele &#238;ntreb&#259;rilor la care tu ai dat un 
	r&#259;spuns gre&#351;it vor fi urmate de X.</p>";
	echo "<div align='center'><table style='margin-top: 0px;'><tr><td><img src='firework 2.gif'></td><td class='pad'>";
	
	if($intr1=="saturn"){
		$s=$s+1;
		echo "1) OK<br>";
	}
	else
		echo "1) X<br>";
	
	if($intr2=="tsib"){
		$s=$s+1;
		echo "2) OK<br>";
	}
	else
		echo "2) X<br>";
		
	if($intr3=="gb"){
		$s=$s+1;
		echo "3) OK<br>";
	}
	else
		echo "3) X<br>";
		
	if($intr4=="1228"){
		$s=$s+1;
		echo "4) OK<br>";
	}
	else
		echo "4) X<br>";
		
	if($intr5=="ruj"){
		$s=$s+1;
		echo "5) OK<br>";
	}
	else
		echo "5) X<br>";
	
	if($intr6=="125"){
		$s=$s+1;
		echo "6) OK<br>";
	}
	else
		echo "6) X<br>";

	if($intr7=="edta"){
		$s=$s+1;
		echo "7) OK<br>";
	}
	else
		echo "7) X<br>";

	
	if($intr8=="sim"){
		$s=$s+1;
		echo "8) OK<br>";
	}
	else
		echo "8) X<br>";

	
	if($intr9=="react1"){
		$s=$s+1;
		echo "9) OK<br>";
	}
	else
		echo "9) X<br>";

	
	if($tifani=="Tiffany Arbuckle"){
		$s=$s+0.5625;
		echo "10) A) OK<br>";
	}
	else
		echo "10) A) X<br>";

	
	if($compozitoare=="compozitoare"){
		$s=$s+0.5625;
		echo "10) B) OK<br>";
	}
	else
		echo "10) B) X<br>";

	
	if($americana=="americana"){
		$s=$s+0.5625;
		echo "10) C) OK<br>";
	}
	else
		echo "10) C) X<br>";

	
	if($optunu=="81"){
		$s=$s+0.5625;
		echo "11) A) OK<br>";
	}
	else
		echo "11) A) X<br>";

	
	if($cincisapte=="57"){
		$s=$s+0.5625;
		echo "11) B) OK<br>";
	}
	else
		echo "11) B) X<br>";
	
	if($romana=="romana"){
		$s=$s+0.5625;
		echo "11) C) OK<br>";
	}
	else
		echo "11) C) X<br>";
	
	echo "</td><td><img src='winding.png' class='img'></td><td class='pad'>";

	
	if($debut=="debut"){
		$s=$s+0.5625;
		echo "11) D) OK<br>";
	}
	else
		echo "11) D) X<br>";

	
	if($greu=="greu"){
		$s=$s+0.5625;
		echo "12) A) OK<br>";
	}
	else
		echo "12) A) X<br>";

	
	if($griargintie=="gri-argintie"){
		$s=$s+0.5625;
		echo "12) B) OK<br>";
	}
	else
		echo "12) B) X<br>";

	
	if($mare=="mare"){
		$s=$s+0.5625;
		echo "12) C) OK<br>";
	}
	else
		echo "12) C) X<br>";
	
	if($foitele=="Foitele"){
		$s=$s+0.5625;
		echo "13) A) OK<br>";
	}
	else
		echo "13) A) X<br>";
	
	if($lambriuri=="lambriuri"){
		$s=$s+0.5625;
		echo "13) B) OK<br>";
	}
	else
		echo "13) B) X<br>";

	
	if($fonica=="fonica"){
		$s=$s+0.5625;
		echo "13) C) OK<br>";
	}
	else
		echo "13) C) X<br>";

	
	if($intoxicatie=="intoxicatie"){
		$s=$s+0.5625;
		echo "14) A) OK<br>";
	}
	else
		echo "14) A) X<br>";

	
	if($vertebrelor=="vertebrelor"){
		$s=$s+0.5625;
		echo "14) B) OK<br>";
	}
	else
		echo "14) B) X<br>";
	
	if($marirea=="marirea"){
		$s=$s+0.5625;
		echo "14) C) OK<br>";
	}
	else
		echo "14) C) X<br>";
	
	if($cas1=="F"){
		$s=$s+1.8;
		echo "15) OK<br>";
	}
	else
		echo "15) X<br>";
	
	if($cas2=="A"){
		$s=$s+1.8;
		echo "16) OK<br>";
	}
	else
		echo "16) X<br>";
	
	if($cas3=="A"){
		$s=$s+1.8;
		echo "17) OK<br>";
	}
	else
		echo "17) X<br>";
	
	if($cas4=="F"){
		$s=$s+1.8;
		echo "18) OK<br>";
	}
	else
		echo "18) X<br>";
	
	if($cas5=="A"){
		$s=$s+1.8;
		echo "19) OK<br>";
	}
	else
		echo "19) X<br>";
	
	echo "</td><td><img src='firework 2.gif'></td></tr></table></div>";

	$s=$s/3;
	
	echo "<p><br> Ai ob&#355;inut nota: <font color='#B41000'>".round($s, 2)."</font><br><br>";
	
	if($s<5)
		echo "<p align='center'><img src='rau.png' align='center'><br><br>Mai ai de &#238;nv&#259;&#355;at!</p><br><br><br><br>";

	if($s>=5 && $s<7)
		echo "<p align='center'><img src='grin.png' align='center'><br><br>Ai &#238;nv&#259;&#355;at mare parte din aceste lec&#355;ii!</p><br><br><br><br>";

	if($s>=7){
		echo '<table align="center"><tr><td align="center"><p align="center">E&#351;ti un "doctor" al plumbului!</p><br><img src="bv.png" align="center"></td>';
		echo '<td align="center"><p>Ai deblocat pagina jocurilor.</p> <br><a href="jocuri.html"><img src="cufar.png" height="300px" width="250px"></a></td></tr></table><br><br>';
	}
?>

</body>
</html>	

