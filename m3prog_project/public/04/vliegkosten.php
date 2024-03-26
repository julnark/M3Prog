<?php
include_once "functions.php";
echo "<br>";
echo "De vliegreis kosten van 3722km, Kerosine prijs €2.05 en een Bagage van 20kilo (Economy class) zijn : €" . number_format(berekenVliegkosten(3722, 2.05, 20, 'economy'), 2) . "<br>";
echo "De vliegreis kosten van 9276km, Kerosine prijs €3.11 en een Bagage van 10kilo (Economy class) zijn : €" . number_format(berekenVliegkosten(9276, 3.11, 10, 'economy'), 2) . "<br>";
echo "De vliegreis kosten van 803km, Kerosine prijs €2.83 en geen bagage (Economy class) zijn : €" . number_format(berekenVliegkosten(803, 2.83, 0, 'business'), 2);

?>