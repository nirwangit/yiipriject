<?php

namespace frontend\controllers;

use frontend\models\Dataset;
use frontend\models\DatasetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ChekAvalibalityController implements the CRUD actions for Dataset model.
 */
class ChekAvalibalityController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Dataset models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DatasetSearch();
        $dataProvider = $searchModel->search();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCoachAvailableFor30Min()
    {
        $searchModel = new DatasetSearch();
        $dataProvider = $searchModel->searchCoaches();

        return $this->render('coach-list', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

}
