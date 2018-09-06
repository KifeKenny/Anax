<?php

// Gather incoming variables and use default values if not set
$items = isset($resultset) ? $items : null;

// Create urls for navigation
$urlToCreate = 'url("comment2/create")';
$urlToEdit = 'url("comment2/edit")';
$urlToRemove = 'url("comment2/delete")';

$session = $di->get("session");
$user_id = $session->get("user_id");

?>
<h1>Comments</h1>
<hr>

<!-- <div style="overflow: auto;">
    <div class="widget left center large widgetAddon"><a href="">Create</a></div>
</div> -->

<?php if (!$resultset) : ?>
    <p>There are no comments ...</p>
<?php
    return;
endif;
?>


<?php foreach ($resultset as $item) : ?>
<div class="commentBorder">
<p>
    <strong><?=$item->title?></strong>
    <br>
</p>
<?php if ($user_id == $item->userId || $user_id == 1) : ?>
    <p style="font-size: small;">
        <em>
            <a href="<?=$urlToEdit . "/" . $item->id?>">Edit</a>
            <a href="<?=$urlToRemove . "/" . $item->id?>">Remove</a>
        </em>
    </p>

<?php endif; ?>
<p style="font-size: small; border-bottom: 1px solid black">
    <em>Av: <?=$item->userMail?></em>
</p>

<p>
    <?=$item->content?>
</p>
</div>

<?php endforeach; ?>
