<?php
function generateListView($array){
foreach ($array as $v) {
  if($v['approved']==1){
    echo "
    <div class=\"joke\">
    <div class=\"jokebody\">".
    $v["full"]
    ."</div></div>
    </br>
    ";
  }
}
}
?>