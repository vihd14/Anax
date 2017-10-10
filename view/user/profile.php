<?php

namespace Anax\View;

/**
 * View to display profile page.
 */
// Show all incoming variables/functions
//var_dump(get_defined_functions());
//echo showEnvironment(get_defined_vars());

// Gather incoming variables and use default values if not set
$items = isset($items) ? $items : null;

// Create urls for navigation
$urlToLogin = url("user/login");
$urlToCreate = url("user/create");

?><h1>Profil</h1>

<p>
    <a href="<?= $urlToLogin ?>">Logga in</a><br>
    <a href="<?= $urlToCreate ?>">Skapa användare</a>
</p>

<?php if (!$items) : ?>
    <p>Inte inloggad...</p>
<?php
    return;
endif;
?>
