<?php

$id = $_GET['id'];
$cid = $id+1;

for($i=$cid;$i<$cid+10;$i++) {
  echo '<li id="'.$i.'">Text '.$i.'</li>';
}


// OUTPUT is

/*

<li id="1">Text 1</li>
<li id="2">Text 2</li>
<li id="3">Text 3</li>
<li id="4">Text 4</li>
<li id="5">Text 5</li>
<li id="6">Text 6</li>
<li id="7">Text 7</li>
<li id="8">Text 8</li>
<li id="9">Text 9</li>
<li id="10">Text 10</li>

*/

?>
