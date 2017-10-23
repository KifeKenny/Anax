<?php

namespace Anax\View;

/**
 * View to display all books.
 */
// Show all incoming variables/functions
//var_dump(get_defined_functions());
//echo showEnvironment(get_defined_vars());

// Gather incoming variables and use default values if not set
$items = isset($items) ? $items : null;

// Create urls for navigation
$urlToCreate = url("book/create");
$urlToDelete = url("book/delete");



?><h1>View all books</h1>

<p>
    <div class="widget left"></div>
    <div class="widget left center large widgetAddon"><a href="<?= $urlToCreate ?>">Create</a></div>
    <div class="widget left center large widgetAddon"><a href="<?= $urlToDelete ?>">Delete</a></div>
</p>

<?php if (!$items) : ?>
    <p>There are no books to show.</p>
<?php
    return;
endif;
?>

<table class="books">
    <tr>
        <th class="books-header">Id</th>
        <th class="books-header">Author</th>
        <th class="books-header">Name</th>
    </tr>
    <?php foreach ($items as $item) : ?>
    <tr>
        <td>
            <a href="<?= url("book/update/{$item->id}"); ?>"><?= $item->id ?></a>
        </td>
        <td><?= $item->author ?></td>
        <td><?= $item->name ?></td>
    </tr>
    <?php endforeach; ?>
</table>
