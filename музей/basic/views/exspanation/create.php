<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Exspanation $model */

$this->title = 'Добавить экспонат';
$this->params['breadcrumbs'][] = ['label' => 'Экспонаты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exspanation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
