<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Exspanation $model */

$this->title = 'Редактировать экспонат:' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Экспонаты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="exspanation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
