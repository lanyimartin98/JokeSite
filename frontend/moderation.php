<?php
function generateModeration($array){
foreach ($array as $v) {
    echo "
    <div class=\"joke\">
    <table  class=\"jokebody\"><tr><td>".
    $v["full"]
    ."</td>
    </tr>
    <tr><td><a href=/jokessite/JokeSite/route=agree&id=".$v['id'].">Elfogad</a></td><td><a href=/jokessite/JokeSite/route=decline&id=".$v['id'].">Elutasít</a></td></tr>
    </table>
    </div>
    </br>
    ";
}
}
?>