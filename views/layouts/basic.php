
<?
use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php /*$this->registerCsrfMetaTags() */?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="wrap">
        <div class="container">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><?=Html::a("Главная",Url::base(true))?></li>
                <li role="presentation" ><?=Html::a("Статьи",['post/show'])?></li>
                <li role="presentation" ><?=Html::a("Статья",['post/index'])?></li>
            </ul>
            <?=$content?>
        </div>
    </div>
</body>
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>