

<h1>Comment section</h1>
<?php

$url_this = $app->url->create("comment");
// var_dump($resultset);
if ($resultset == "null") {
    echo "";
} elseif ($resultset == "1") {
    echo '<div class="popUpmes green"><p>Succsess! Comment added</p></div>';
} elseif ($resultset == "2") {
    echo '<div class="popUpmes red"><p>Error! Comment not added somthing went wrong</p></div>';
}
?>


<form class="" action="<?=$url_this?>" method="post">
<p>
    <label>Title</label><br>
    <input type="text" name="comTitle" placeholder="<myTitle>">
</p>
    <label>Mail</label><br>
    <input type="text" name="comMail" placeholder="<username@hotmail.com>">
<p>
    <label>Text</label><br>
    <textarea class="editText" name="comText" placeholder="<text>"></textarea>
</p>

<p>
<button type="submit" name="doSave"><i class="fa fa-floppy-o" aria-hidden="true"></i> Comment</button>
</p>
</form>

<hr>

<h3>Comments</h3>
<?php
if ($app->session->has("Messages")) {
    $comments = $app->session->get("Messages");
    $url = $app->url->create("comment/edit");


    foreach ($comments as $com) {
        $content = $app->textfilter->parse($com["Text"], ["markdown"]);
        $output = <<<EOD
        <div class="commentBorder">
        <p>
            <strong><a href="$url?id=$com[id]" > $com[Title] </a></strong>
            <em><a href="$url_this?id=$com[id]">Delete</a></em>
        </p>
        $content->text
        </div>
EOD;
        echo $output;
    }
    // var_dump($lol);
}
