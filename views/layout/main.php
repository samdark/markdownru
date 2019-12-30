<?php

use App\Asset\AppAsset;

/**
 * @var \Yiisoft\Router\UrlGeneratorInterface $urlGenerator
 * @var \Yiisoft\View\WebView $this
 * @var string $content
 */

$this->beginPage();
?><!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Markdown по-русски</title>

    <link rel="stylesheet" href="/all.css" media="all">
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <a class="logo" href="<?= $urlGenerator->generate('site/content') ?>"><img src="/logo.svg"> </a>

    <?= $content ?>

    <footer>
        <p>© 2019 <a href="https://rmcreative.ru/">Александр Макаров</a>.</p>
        <p>
            Сайт работает на <a href="https://www.yiiframework.com/">Yii 3</a>. <br>
            <a href="https://github.com/samdark/markdownru">Исходный код доступен на GitHub</a>.
        </p>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php
$this->endPage(true);
