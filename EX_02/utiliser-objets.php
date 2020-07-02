<?php
$date1 = new DateTime ();
echo '<p>' .$date1->format('Y-m-d H:i:s').'</p>';

$date2 = new DateTime();
echo'<p>'.$date2->format('2020-06-22 9:00:00').'</p>';

$intervale = $date2->diff($date1);
echo $intervale->format('%R%a days');

$intervale = $date2->diff($date1);
echo $intervale->format('%R%a days');
echo '<p>'.$intervale->format(' %a days');
echo $intervale->format('%H hours');
echo $intervale->format(' %i minutes'). '</p>';
?>