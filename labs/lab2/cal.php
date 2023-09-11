<?php
function add($x,$y) {
    return($x+$y);
}
function multiply($x,$y) {
    return($x-$y);
}
function subtract($x,$y) {
    return($x*$y);
}
function divide($x,$y) {
    return($x/$y);
}

echo "3 + 5 =".add(3,5)."<br>";
echo "3 * 5 =".multiply(3,5)."<br>";
echo "3 - 5 =".subtract(3,5)."<br>";
echo "3 / 5 =".divide(3,5);
?>
