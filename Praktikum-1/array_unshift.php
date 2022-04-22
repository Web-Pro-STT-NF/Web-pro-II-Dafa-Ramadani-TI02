<!DOCTYPE html>
<html>
<body>
<?php
$tims = ["dafa","ridho","ubay","artz"];
array_unshift($tims);
foreach($tims as $person){
    echo $person. '<br/>';
}
?>
</body>
</html>
