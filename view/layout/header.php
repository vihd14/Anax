<!doctype html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= $this->di->get("url")->create("css/style.css") ?>">
    <link rel="shortcut icon" href="<?= $this->di->get("url")->create("img/favicon.ico") ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>
<body>
    <main>
        <header class="site-header">
            <img src="<?= $this->di->get("url")->create("img/header.png") ?>">
        </header>
