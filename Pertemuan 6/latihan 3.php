<?php
echo "Sort ascending <br><br>";
$nama = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
sort($nama);

$length = count($nama);
for($x = 0; $x < $length; $x++) {
    echo $nama[$x];
    echo "<br>";
}
?>