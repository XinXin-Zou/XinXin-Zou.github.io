<?php 
	// 打印1~100之间7的倍数
	for ($i=1;$i<100;$i++) { 
		if ($i%7==0) {
			echo $i."<br>";
		}
	}
	echo "<hr>";
	//打印1~100之间个位为7的数
	for($i=1;$i<100;$i++){
		if ($i%10==7) {
			echo $i."<br>";
		}
	}
	echo "<hr>";
	//打印1~100之间十位为7的数
	for($i=1;$i<100;$i++){
		if (intval($i/10)==7) {
			echo $i."<br>";
		}
	}
	echo "<hr>";

	//打印1~100之间个位不为7,十位不为7,以及不是7的倍数
	for($i=1;$i<100;$i++){
		if ($i%10!=7 AND intval($i/10)!=7 AND $i%7!=0) {
			echo $i."<br>";
		}
	}
	echo "<hr>";

	//打印九九乘法表
	for($i=1;$i<10;$i++){
		for($j=1;$j<=$i;$j++){
			echo $j."*".$i."=".$i*$j."&nbsp"."&nbsp";
		}
		echo "<br>";
	}

 ?>