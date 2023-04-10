<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Dataset $model */

$this->title = 'Update Dataset: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Datasets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dataset-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
