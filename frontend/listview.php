<?php
function generateListView($array){
foreach ($array as $v) {
    echo "
    <div class=\"joke\">
    <div class=\"jokebody\">".
    $v["full"]
    ."</div></div>
    </br>
    ";
  }
}
?>