<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Dataset $model */

$this->title = 'Create Dataset';
$this->params['breadcrumbs'][] = ['label' => 'Datasets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dataset-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
