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



?><h1>Lista av böcker</h1>

<p>
    <a href="<?= $urlToCreate ?>">Skapa ny</a> |
    <a href="<?= $urlToDelete ?>">Ta bort</a>
</p>
<p>Klicka på bokens Id för att redigera.</p>

<?php if (!$items) : ?>
    <p>Inga böcker inlagda...</p>
    <?php
    return;
endif;
?>

<table>
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
</table>
