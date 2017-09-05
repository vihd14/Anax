<?php
/**
 * Routes.
 */
require __DIR__ . "/route/internal.php";
require __DIR__ . "/route/base.php";
require __DIR__ . "/route/debug.php";
// require __DIR__ . "/route/flat-file-content.php";
// require __DIR__ . "/route/404.php";

$app->router->add("", function () use ($app) {
    $urlHome  = $app->url->create("");
    $urlAbout = $app->url->create("about");
    $urlReport = $app->url->create("report");
    $navbar = <<<EOD
<navbar>
    <a href="$urlHome">HOME</a>
    <a href="$urlAbout">ABOUT</a>
    <a href="$urlReport">REPORT</a>
</navbar>
EOD;
});
