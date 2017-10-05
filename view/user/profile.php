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

<!-- <table>
    <tr>
        <th>Id</th>
        <th>Titel</th>
        <th>Författare</th>
    </tr>
    <?php foreach ($items as $item) : ?>
    <tr>
        <td>
            <a href="<?= url("book/update/{$item->id}"); ?>"><?= $item->id ?></a>
        </td>
        <td><?= $item->column1 ?></td>
        <td><?= $item->column2 ?></td>
    </tr>
    <?php endforeach; ?>
</table> -->
