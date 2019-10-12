<?php 
// Untuk mengecek bilangan primanya
function primaCek($number){ 
    if ($number == 1) 
    return 0; 
      
    for ($i = 2; $i <= $number/2; $i++){ 
        if ($number % $i == 0) 
            return 0; 
    } 
    return 1; 
} 
  
//Main
echo "Menegecek bilangan prima diantara 1 - 37"; echo "<br>";
for ($i=1; $i <=37 ; $i++) { 
	$number = $i; 
	$cek = primaCek($number); 
	if ($cek == 1) 
	    echo "$i bilangan Prima &#10004"; 
	else
	    echo "$i bukan bilangan Prima"; 
		echo "<br>";
}
?> 