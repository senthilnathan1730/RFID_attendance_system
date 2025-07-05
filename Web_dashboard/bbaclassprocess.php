<?php

if(isset($_POST['go']))
{


$year = $_POST['year'];
$section = $_POST['section'];

if($year == 'third')
   {
 	if($section == 'A')
    {
        header('Location:bbareport-a.php');

    }
    else{
        header('Location:bca-reportb.php');   
    }
   }

elseif($year == 'second')
   {
 	if($section == 'A')
    {
        header('Location:bcasecond-a.php');

    }
    else{
        header('Location:bcasecond-b.php');   
    }
   }
else
   {
 	if($section == 'A')
    {
        header('Location:bcafirst-a.php');

    }
    else{
        header('Location:bcafirst-b.php');   
    }
   }
}

?>
