<?php

$insert=0;
echo "<br/>";
for($i=1;$i<=3;$i++)
{
if(!empty($_POST['seat'.$i]))
{
$insert=$insert.','.$i;
echo "<br/>";
}
}
echo $insert;
?>