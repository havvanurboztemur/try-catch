<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
function bolme($sayi1, $sayi2) {
 $sonuc=0;
 try{
 
 if($sayi2==0){
 throw new Exception("<i style='color:red'>Hatalı İşlem Yapıldı</i>");
 }
 $sonuc=$sayi1/$sayi2;
 return $sonuc; 
 }
 catch(Exception $e)
 { //istisna tespit edildi.
 echo $e->getMessage();
 }
}
echo "<i style='color:darkblue'>".bolme(16,4)."</i><br>";
echo "<i style='color:darkblue'>".bolme(34,0)."</i><br>";
echo "<i style='color:darkblue'>".bolme(6,3)."</i><br>";
echo "<i style='color:darkblue'>".bolme(25,0)."</i><br>";
?>
</body>
</html>