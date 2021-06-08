<?php
echo "Selection Sort";
echo "<br>";
$data=array(25,10,35,50,40,20);
function selection_sort($data){
  $n=count($data);
  for ($i = 0;$i<$n;$i++){
    $k = $i;
    for ($j = $i+1;$j<$n;$j++){
      if ($data[$j] < $data[$k]) $k = $j;
    }   
    $dummy=$data[$i];
    $data[$i]=$data[$k];
    $data[$k]=$dummy;
  }
  return $data;
}
echo "Random Data = ";
echo implode ($data);
echo "<br>";
echo "Sequence Data = ";
echo implode (selection_sort($data));
?>