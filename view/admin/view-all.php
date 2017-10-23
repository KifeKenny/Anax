<?php

namespace Anax\View;

$items = isset($items) ? $items : null;

// Create urls for navigation
$urlToCreate = url("user/create");
$urlToDelete = url("user/admin/delete");
$urlToEdit = url("user/edit");



?><h1>View all profiles</h1>

<div>
<div class="widget left large center widgetAddon"><a href="<?= $urlToCreate ?>">Create</a></div>
</div>

<?php if (!$items) : ?>
    <p>There are no profiles to show.</p>
<?php
    return;
endif;
?>

<table class="books">
    <tr>
        <th class="books-header">Name</th>
        <th class="books-header">Mail</th>
        <th class="books-header">Password</th>
        <th class="books-header">Edit</th>
        <th class="books-header">Delete</th>
    </tr>
    <?php foreach ($items as $item) : ?>
    <tr>
        <td><?= $item->acronym ?></td>
        <td><?= $item->mail ?></td>
        <td><?= $item->password ?></td>
        <td>
            <a href="<?= $urlToEdit . "/{$item->id}" ?>">Edit</a>
        </td>
        <td>
            <a href="<?= $urlToDelete . "/{$item->id}" ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
