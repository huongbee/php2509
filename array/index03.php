<?php

$a = 20000.06;
echo number_format($a);  // 20,000 
echo "<br>";
echo number_format($a,1);    // 20.000
echo "<br>";

echo number_format($a,1,',','.');    // 20.000
echo number_format($a,1,',','.');    // 20.000







// $tongchan = 0;
// $tongle = 0;
// for($i=0; $i<=6;$i++):
//     if($i%2==0):
//         $tongchan+=$i; // $tong = $tong+$i;
//     elseif($i%2!=0):
//         $tongle+=$i;
//     endif;
// endfor;
// echo $tongchan;
// echo "<br>";
// echo $tongle;
?>