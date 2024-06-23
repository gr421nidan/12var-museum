<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Invintarisation $model */

$this->title = 'Провести инвентаризацию экспоната';
$this->params['breadcrumbs'][] = ['label' => 'Инвентаризации', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invintarisation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
