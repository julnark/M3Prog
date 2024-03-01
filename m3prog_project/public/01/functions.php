<?php

//Strtoupper Make a sting uppercase
$str = "Ik hou van ICE CREAM OMG";
$str = strtoupper($str);
echo $str; // Prints MARY HAD A LITTLE LAMB AND SHE LOVED IT SO
 
echo "<br>";

//strpos Find the position of the firs occurrence of a substring in a string
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}

echo "<br>";

//file_exists Checks wether a fle or directory exists
$filename = '/public/02/lijp.txt';

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}
?>