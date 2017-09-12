<?php
/**
 * Routes for pages.
 */
$app->router->add("", function () use ($app) {
    $app->view->add("home/header", ["title" => "Home - Viza's page"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("home/home");
    $app->view->add("home/footer");

    $app->response->setBody([$app->view, "render"])
               ->send();
    exit;
});

$app->router->add("about", function () use ($app) {
    $app->view->add("home/header", ["title" => "About - Viza's page"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("about/about");
    $app->view->add("home/footer");

    $app->response->setBody([$app->view, "render"])
               ->send();
    exit;
});

$app->router->add("report", function () use ($app) {
    $app->view->add("home/header", ["title" => "Report - Viza's page"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("report/report");
    $app->view->add("home/footer");

    $app->response->setBody([$app->view, "render"])
               ->send();
    exit;
});

$app->router->add("rem", function () use ($app) {
    $app->view->add("home/header", ["title" => "REM Server - Viza's page"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("remserver/rem");
    $app->view->add("home/footer");

    $app->response->setBody([$app->view, "render"])
               ->send();
    exit;
});

$app->router->add("comments", function () use ($app) {
    $app->view->add("home/header", ["title" => "Comments - Viza's page"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("comments/comments");
    $app->view->add("home/footer");

    $app->response->setBody([$app->view, "render"])
               ->send();
    exit;
});

$app->router->add("post-comments", function () use ($app) {
    $app->view->add("home/header", ["title" => "Comments - Viza's page"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("comments/post-comments");
    $app->view->add("home/footer");

    $app->response->setBody([$app->view, "render"])
               ->send();
    exit;
});
