<?php
$tongchan = 0;
$tongle = 0;
for($i=0; $i<=6;$i++):
    if($i%2==0):
        $tongchan+=$i; // $tong = $tong+$i;
    elseif($i%2!=0):
        $tongle+=$i;
    endif;
endfor;
echo $tongchan;
echo "<br>";
echo $tongle;
?>