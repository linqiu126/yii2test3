<?php
/**
 * Created by PhpStorm.
 * User: liqiu
 * Date: 2015/5/30
 * Time: 12:28
 */
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
