<?php
//Looping FOR
//Hitung pengulangan 1 s.d 10
for($x=1;$x<=10;$x=$x+1){ //$x++ = $x+1 $x-- = $x=$x-1
    echo "$x <br>";
}
echo "<hr>";
for($x=1;$x<=10;$x=$x+1){ //$x++ = $x+1 $x-- = $x=$x-1
    echo "Saya sedang belajar php <br>";
}
echo "<hr>";

//Hitung pengulangan 10 s.d 1
// for ($y=10;$y>=1;$y=$y-1){
//     echo "$y <br>" ;
// }

for ($y = 10; $y >= 1; $y--) {
    echo "$y<br>";
}
echo "<hr>";

//Looping While
//Hitung 1 s.d 10
$j=1;
while($j<=10){
    echo "$j <br>";
    $j++;
}

?>
<form>
    Jumlah Siswa:
    <?php 
        for($z=1;$z<=10;$z=$z+1){
            echo '<input type="radio" name="jk" value="$z">'.$z;
        }
    ?>
</form>