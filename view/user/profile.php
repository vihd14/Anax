<?php

namespace Anax\View;
use \Anax\User\UserLoginForm;
use \Anax\Session\Session;

/**
 * View to display profile page.
 */
// Show all incoming variables/functions
//var_dump(get_defined_functions());
//echo showEnvironment(get_defined_vars());

//Start Session
$session = new Session();

// Gather incoming variables and use default values if not set
$items = isset($items) ? $items : null;

// Create urls for navigation
$urlToLogin = url("user/login");
$urlToCreate = url("user/create");
$urlToLogout = url("user/logout");

?>

<?php if ($session->has("user")) : ?>
    <h1>Profil för <?= $session->get("user"); ?> </h1>
    <p><b>E-mail:</b> <?= $session->get("email"); ?></p>

    <a href="<?= $urlToLogout ?>">Logga ut</a>
<?php else : ?>
    <h1>Profil</h1>
    <p>Inte inloggad...</p>
    <a href="<?= $urlToLogin ?>">Logga in</a><br>
    <a href="<?= $urlToCreate ?>">Skapa användare</a>
<?php
    return;
endif; ?>
