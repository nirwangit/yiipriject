<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Dataset $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dataset-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'timezone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dayOfWeek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'availableAt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'availableUntil')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
