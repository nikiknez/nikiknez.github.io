<html>
	<head><title>Izlaz</title></head>
	<body>
	<?php
	function sadrzi($slova,$rec){
		$aslova= str_split($slova);
		$arec= str_split($rec);
		$slovalen=strlen($slova);
		$reclen=strlen($rec);
		$j=0;
		for($i=0;$i < $reclen;$i++){
			for($j=0;$j<$slovalen;$j++){
				if ($arec[$i] == $aslova[$j]) {
					$aslova[$j] = ".";
					break;
				}
			}
			if ($j == $slovalen - 1)
					return false;
		}
		return true;
	}
	$file = fopen("reci.txt","r");
	$slova=$_POST['slova'];
	$max = array("","","","","","","","","","");
	while(!feof($file)){
		$rec = fgets($file);
		if(sadrzi($slova,$rec)){
			for($i=0;$i<10;$i++){
				if(strlen($rec)>strlen($max[$i])){
					for($j=9;$j>$i;$j--)
						$max[$j]=$max[$j-1];
					$max[$i]=$rec;
					break;
				}
			}
		}
	}
	echo "<hr>";
	for($i=0;$i<10;$i++)
		echo  strlen($max[$i]) . ": $max[$i]" . "<br/>";
	echo "<hr>";
	fclose($file);
	?>
	</body>
</html>