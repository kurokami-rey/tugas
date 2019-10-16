<?php
$a = 98 ;
echo 'pak bambang mempunyai air dengan volume ' .$a ;
echo "<br>" ;
echo '1.jika volume wadah pas akan muncul tulisan "pas"' ;
echo "<br>" ;
echo '2.jika volume wadah lebih kecil akan muncul tulisan "tumpah"' ;
echo "<br>" ;
echo '3.jika volume wadah lebih besar akan muncul tulisan "sisa"' ;
$p = 7 ;
$l = 7 ;
$t = 2 ;
$v = $p*$l*$t ;
echo "<br>" ;
echo 'hasil : ' ;
echo "<br>" ;
if ($v > 98){
	echo 'sisa' ;
}else if ($v == 98){
	echo 'pas' ;
}else{
	echo 'tumpah' ;
}

?>
