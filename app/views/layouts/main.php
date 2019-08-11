<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php
    Yii::$app->view->registerLinkTag([
      'rel' => 'shortcut icon',
      'href' => '/favicon.ico',
      'type' => 'image/x-icon',
    ]);
    Yii::$app->view->registerMetaTag([
      'name' => 'description',
      'content' => Yii::t('burl', 'MAIN_DESCRIPTION')
    ]);
    Yii::$app->view->registerMetaTag([
      'name' => 'keywords',
      'content' => Yii::t('burl', 'MAIN_KEYWORDS')
    ]);
    ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?= $this->render('_navbar'); ?>
    <div class="container">
        <?= $this->render('_breadcrumbs'); ?>
        <?= $content ?>
    </div>
</div>
<?= $this->render('_footer'); ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
