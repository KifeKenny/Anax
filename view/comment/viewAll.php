<?php

namespace Anax\View;

// Gather incoming variables and use default values if not set
$items = isset($items) ? $items : null;

// Create urls for navigation
$urlToCreate = url("comment/create");
$urlToEdit = url("comment/edit");
$urlToRemove = url("comment/delete");

$session = $di->get("session");
$user_id = $session->get("user_id");

?><h1>View all Comments</h1>

<div style="overflow: auto;">
    <div class="widget left center large widgetAddon"><a href="<?= $urlToCreate ?>">Create</a></div>
</div>

<?php if (!$items) : ?>
    <p>There are no comments ...</p>
<?php
    return;
endif;
?>


<?php foreach ($items as $item) : ?>
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
