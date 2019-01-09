<?php
if(isset($_GET['submit'])){
     $input = $_GET['num'];
	 $fac = 1;
	 for($i=$input;$i>=1;$i--){
		$fac = $fac*$i; 
	 }
	 print "The Factorial Number is: ".$fac;
}
?>
<form action="" method="get">
     Enter Number: <input type="text" name="num"/>
                   <input type="submit" name="submit" value="Factorial"/>
</form>