<?php
$emp = [
    [1, "krishana", "Managar ", 50000],
    
    [2, "Salman", "Salesman ", 20000],
    [3, "krishana", "Computer Operator  ", 60000] , 
];
/*
echo $emp [0] [0]. " ";
echo $emp [0] [1]. " ";
echo $emp [0] [2]. " ";
echo $emp [0] [3]. " ";

echo "<br>";
echo $emp [1] [0]. " ";
echo $emp [1] [1]. " ";
echo $emp [1] [2]. " ";
echo $emp [1] [3]. " ";

*/
/*
echo "<pre>";
print_r($emp);

echo "</pre>";

*/


# using for Loop 

/*
for ($row=0; $row < 3 ; $row++) { 
    for ($col=0; $col < 3 ; $col++) { 
   echo $emp [$row][$col] ." ";
}
 echo "<br>";
}
 */

 #using foreach loop

 foreach ($emp  as  $v1 ) {
    foreach ($v1  as  $v2 ) {
   echo $v2 ." ";
 }
 echo "<br>";
 }


?>