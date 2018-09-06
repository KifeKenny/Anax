<?php

namespace Anax\View;

$create = url("");
/**
 * View to create a new book.
 */
// Show all incoming variables/functions
//var_dump(get_defined_functions());
//echo showEnvironment(get_defined_vars());

// Gather incoming variables and use default values if not set
$items = isset($items) ? $items : null;


?><h1>Comment</h1>

<?= $form ?>

<p>
    <a href="<?=$create?>">Back</a>
</p>
