<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Invintarisation $model */

$this->title = 'Update Invintarisation: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Invintarisations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="invintarisation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
