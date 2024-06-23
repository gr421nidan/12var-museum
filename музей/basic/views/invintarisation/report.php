<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Invintarisation $model */


$this->title = 'Отчёт об инвентаризации';
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>


<div class="invintarisation-report">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>Количество поврежденных экспонатов: <?= Html::encode($damagedCount) ?></p>
    <p>Количество не критически поврежденных экспонатов: <?= Html::encode($notAllDamagedCount) ?></p>
    <p>Количество неповрежденных экспонатов: <?= Html::encode($notDamagedCount) ?></p>

</div>

