<?php

use app\models\Invintarisation;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Проведенные инвентаризации';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invintarisation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Провести инвентаризацию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::a('Выписать отчёт об инвентаризации', ['report'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'date',
            ['attribute' => 'expanation_id',
                'value' => function ($model) {
                    return $model->expanation->name;
                }],
            'username',
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Invintarisation $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
