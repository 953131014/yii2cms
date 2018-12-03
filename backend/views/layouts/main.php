<?php
use yii\helpers\Html;
use yii\helpers\Url;
use backend\assets\AdminAsset;

$asset = AdminAsset::register($this);
$moduleName = $this->context->module->id;
?>
<?php $this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <?= Html::csrfMetaTags() ?>
    <title><?=  'Control Panel' ?> - <?= Html::encode($this->title) ?></title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="admin-body">
    <div class="container">
        <div class="wrapper">
            <div class="header">
                <div class="logo">
                    <img src="<?= $asset->baseUrl ?>/img/logo_20.png">
                    EasyiiCMS
                </div>
                <div class="nav">
                    <a href="<?= Url::to(['/']) ?>" class="pull-left"><i class="glyphicon glyphicon-home"></i> <?=  'Open site' ?></a>
                    <a href="<?= Url::to(['/sign/out']) ?>" class="pull-right"><i class="glyphicon glyphicon-log-out"></i> <?=  'Logout'?></a>
                </div>
            </div>
            <div class="main">
                <div class="box sidebar">

                    <a href="<?= Url::to(['/settings/index']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'settings') ? 'active' :'' ?>">
                        <i class="glyphicon glyphicon-cog"></i>
                        <?=  'Settings'?>
                    </a>
                        <a href="<?= Url::to(['/modules/index']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'modules') ? 'active' :'' ?>">
                            <i class="glyphicon glyphicon-folder-close"></i>
                            <?=  'Modules'?>
                        </a>
                        <a href="<?= Url::to(['/admins/index']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'admins') ? 'active' :'' ?>">
                            <i class="glyphicon glyphicon-user"></i>
                            <?=  'Admins'?>
                        </a>
                        <a href="<?= Url::to(['/system/index']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'system') ? 'active' :'' ?>">
                            <i class="glyphicon glyphicon-hdd"></i>
                            <?=  'System'?>
                        </a>
                        <a href="<?= Url::to(['/logs/index']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'logs') ? 'active' :'' ?>">
                            <i class="glyphicon glyphicon-align-justify"></i>
                            <?=  'Logs'?>
                        </a>
                </div>
                <div class="box content">
                    <div class="page-title">
                        <?= $this->title ?>
                    </div>
                    <div class="container-fluid">
                        <?php foreach(Yii::$app->session->getAllFlashes() as $key => $message) : ?>
                            <div class="alert alert-<?= $key ?>"><?= $message ?></div>
                        <?php endforeach; ?>
                        <?= $content ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
