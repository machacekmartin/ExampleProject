<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Example</title>
        <meta name="author" content="Martin">
        <meta name="description" content="Example">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?= STYLES ?>/css/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src=" <?= JS ?>menuHandler.js"></script>

    </head>
    <body>
    <header id="menu" class="flex row">
        <div class="logo">
            <a href="/home">
                <h4>EXAMPLE</h4>
            </a>
        </div>
        <ul class="items flex row">
            <li class="item">
                <a href="/posts" class="link">Posts</a>
            </li>
            <li class="item">
                <a href="/images" class="link">Images</a>
            </li>
            <li class="item">
                <a href="" class="link">Account</a>
            </li>
        </ul>
        <div class="right flex row">
            <div class="login">
                <a href="">Login</a> 
            </div>
            <span class="switch">M</span>
        </div>
    </header>
    <section id="content" class="flex column">
