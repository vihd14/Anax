<?php

namespace Anax\View;

/**
 * View to display all comments.
 */
// Show all incoming variables/functions
//var_dump(get_defined_functions());
//echo showEnvironment(get_defined_vars());

// Gather incoming variables and use default values if not set
$items = isset($items) ? $items : null;

// Create urls for navigation
$urlToCreate = url("comments/create");
$urlToDelete = url("comments/delete");



?><h1>Kommentarer</h1>

<p>
    <a href="<?= $urlToCreate ?>">Skriv ny kommentar</a>
</p>

<?php if (!$items) : ?>
    <p>Inga kommentarer att visa...</p>
<?php
    return;
endif;
?>
