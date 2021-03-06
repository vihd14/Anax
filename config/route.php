<?php
/**
 * Routes.
 */
require __DIR__ . "/route/internal.php";
require __DIR__ . "/route/debug.php";
require __DIR__ . "/route/flat-file-content.php";
require __DIR__ . "/route/remserver.php";
//Keep 404 as last route.
require __DIR__ . "/route/404.php";

$app->router->add("", function () use ($app) {
    $urlHome  = $app->url->create("");
    $urlAbout = $app->url->create("about");
    $urlReport = $app->url->create("report");
    $urlRemServer = $app->url->create("remserver");
    $urlComments = $app->url->create("comments");
    $urlBooks = $app->url->create("book");
    $urlProfile = $app->url->create("user");
    $urlPostComments = $app->url->create("post-comments");
    $navbar = <<<EOD
<navbar>
    <a href="$urlHome">HOME</a>
    <a href="$urlAbout">ABOUT</a>
    <a href="$urlReport">REPORT</a>
    <a href="$urlRemServer">REM SERVER</a>
    <a href="$urlComments">COMMENTS</a>
    <a href="$urlBooks">BOOKS</a>
    <a href="$urlProfile">PROFIL</a>
</navbar>
EOD;
});
