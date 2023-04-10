<?php

use frontend\models\Dataset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DatasetSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '30 Mint slot available';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="dataset-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
    
        'id'=>'boxPjax',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            //'id',
            
        ],
    ]); 
    ?>
    <script>
$.pjax.reload({container: '#boxPjax', async: true});
</script>

</div>
