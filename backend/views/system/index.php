<?php
use backend\models\Setting;
use yii\helpers\Url;

$this->title = 'System';
?>

<br>

<p>
    <a href="<?= Url::to(['system/flush-cache']) ?>" class="btn btn-default"><i class="glyphicon glyphicon-flash"></i> <?= 'Flush cache' ?></a>
</p>

<br>

<p>
    <a href="<?= Url::to(['system/clear-assets']) ?>" class="btn btn-default"><i class="glyphicon glyphicon-trash"></i> <?= 'Clear assets' ?></a>
</p>