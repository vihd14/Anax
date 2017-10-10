<?php

namespace Anax\View;

/**
 * View to create a new comment.
 */
// Show all incoming variables/functions
//var_dump(get_defined_functions());
//echo showEnvironment(get_defined_vars());

// Gather incoming variables and use default values if not set
$items = isset($items) ? $items : null;

// Create urls for navigation
$urlToViewItems = url("comments");

?><h1>Skriv en kommentar</h1>

<a href="<?= $urlToViewItems ?>">Visa tidigare kommentarer</a>

<?= $form ?>
