<?php 
    require_once(ROOT_DIR.'/backend/database.php');
    if(isset($_POST['add'])){
        addJoke($_POST['joke'],$_POST['category']);
        header('Location:/jokessite/JokeSite/');
    }
?>
<form method="POST">
<table class="jokebody">
<tr><td>Vicc szövege:</td></tr>
<tr>
<td><input name="joke" type="text" class="textblock" required></td>
</tr>
<tr><td>Vicc kategóriája:</td></tr>
<tr>
<tr>
<td><select required name="category">
<?php 
foreach (getCategories() as $v) {
    echo '<option value='.$v['id'].'>'.$v['name'].'</option>';
}?>
</select></td>
</tr>
<tr><td><button type = "submit" class = "submit" name = "add">Hozzáadás</button></td></tr>
</table>
</form>