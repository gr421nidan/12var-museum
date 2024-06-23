<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Invintarisation $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="invintarisation-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'expanation_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Exspanation::find()->all(), 'id', 'name'), ['prompt' => 'Выберите экспонат']) ?>


    <?= $form->field($model, 'status')->dropDownList(['text' => 'Назначте статус', 'Статус' => ['Не повреждено' => 'Не повреждено', 'Не критично повреждено' => 'Не критично повреждено', 'Повреждено' => 'Повреждено']]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
