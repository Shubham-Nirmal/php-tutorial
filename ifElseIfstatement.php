<?php
 $per  = 89;
if ($per >= 80 && $per <= 100 ) {
    echo "1st Division ";
}
elseif($per >= 60 && $per <= 80 ) {
    echo "2nd Division";
}
elseif($per >= 45 && $per <= 60 ) {
    echo "3rd Divisiopn";
}
elseif($per < 33 ) {
    echo "Fail";
}
else{
    echo " Please Enter Valid percentage ";
}



?>