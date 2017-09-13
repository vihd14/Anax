<?php
/**
 * Routes for comment system.
 */
 /** Start the session and initiate the REM Server. */
$app->router->add("api/**", [$app->remController, "anyPrepare"]);

/** Init or re-init the REM Server. */
$app->router->get("api/init", [$app->remController, "anyInit"]);

/** Destroy the session. */
$app->router->get("api/destroy", [$app->remController, "anyDestroy"]);

/** Get the dataset or parts of it. */
$app->router->get("api/{dataset:alphanum}", [$app->remController, "getDataset"]);

/** Get one item from the dataset. */
$app->router->get("api/{dataset:alphanum}/{id:digit}", [$app->remController, "getItem"]);

/** Create a new item and add to the dataset */
$app->router->post("api/{dataset:alphanum}", [$app->remController, "postItem"]);

/** Upsert/replace an item in the dataset. */
$app->router->put("api/{dataset:alphanum}/{id:digit}", [$app->remController, "putItem"]);

/** Delete an item from the dataset */
$app->router->delete("api/{dataset:alphanum}/{id:digit}", [$app->remController, "deleteItem"]);

/** Show a message that the route is unsupported, a local 404. */
$app->router->add("api/**", [$app->remController, "anyUnsupported"]);
