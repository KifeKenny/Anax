<?php

if ($resultset == null) {
    return;
}
?>

<h1> Edit comment </h1>

<?php

if ($resultset["result"] == "1") {
    echo '<div class="popUpmes green"><p>Succsess! Comment added</p></div>';
} elseif ($resultset["result"] == "2") {
    echo '<div class="popUpmes red"><p>Error! Comment not added somthing went wrong</p></div>';
}

?>

<form class="" action="" method="post">
<p>
    <label>Title</label><br>
    <input type="text" name="comEdiTitle" placeholder="<myTitle>" value="<?=htmlentities($resultset["Title"])?>" required>
</p>
    <label>Mail</label><br>
    <input type="text" name="comEdiMail" placeholder="<username@hotmail.com>" value="<?=htmlentities($resultset["Mail"])?>" required>
<p>
    <label>Text</label><br>
    <textarea class="editText" name="comEdiText" placeholder="<text>" required><?=htmlentities($resultset["Text"])?></textarea>
</p>

<p>
<button type="submit" name="doSave"><i class="fa fa-floppy-o" aria-hidden="true"></i> Comment</button>
</p>
</form>
