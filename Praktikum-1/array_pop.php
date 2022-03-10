<!DOCTYPE html>
<html>
<body>
<?php
$tims = ["dafa","ridho","ubay","artz"];
array_pop($tims);
foreach($tims as $person){
    echo $person. '<br/>';
}
?>
</body>
</html>
