<?php 
$emp = [
    [1, "Krishna", "Manager", 50000 ],
    [2, "Salaman", " Salesman", 20000],
    [3, "Mohan", "Computer operator", 12000],
    [4, "Amir", "Driver", 5000]
];
 
echo "<table border = '2px' cellpadding = '5px' cellspacing= '0px'>";
foreach ($emp as list  ($id, $name, $designation, $salary )) {
    # code...
    echo "<tr> <td>$id </td> <td>$name</td> <td>$designation</td> <td>$salary </td></tr>";
}

echo "</table>";

?>