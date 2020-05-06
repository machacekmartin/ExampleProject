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
        <ul class="items flex row transition">
            <li class="item">
                <a href="/posts" class="link transition">Posts</a>
            </li>
            <li class="item">
                <a href="/images" class="link transition">Images</a>
            </li>
            <li class="item">
                <a href="" class="link transition"><s>Account</s></a>
            </li>
        </ul>
        <div class="right flex row">
            <div class="login">
                <a href=""><s>Login</s></a> 
            </div>
            <img src="<?= IMAGES ?>static/menu.png" class="switch" >
        </div>
    </header>
    <section id="content" class="flex column">
