<?php

namespace frontend\models;
use Yii;
use yii\base\Model;
use yii\data\SqlDataProvider;
use frontend\models\Dataset;

/**
 * DatasetSearch represents the model behind the search form of `frontend\models\Dataset`.
 */
class DatasetSearch extends Dataset
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name',  'availableAt', 'availableUntil'], 'safe'],
            [['id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search()
    {
                //echo date();die;
        $currentDate = gmdate('Y-m-d ');
        $currentTime = gmdate('H:i:s');
        $weekDays = date('w',strtotime($currentDate));
        $weekDays = ($weekDays==7) ?  6 : $weekDays-1;
        //die;
        $query = "
        select * from (
        select * ,
        CASE 
              WHEN  DATE(utcAvailableAt)>CURDATE() then CASE when (QuantityText+1)=7 then 1 ELSE QuantityText+1 END
              WHEN  DATE(utcAvailableAt)< CURDATE() then CASE when QuantityText-1 in (0,-1) then 6 ELSE QuantityText-1 END
              WHEN  DATE(utcAvailableAt)=CURDATE() then QuantityText
              END as utcDays
       from (
            select *,CONCAT(CURDATE() ,' ',availableAt) as fdvf,
            CASE
                WHEN dayOfWeek = 'Monday' THEN 0
                WHEN dayOfWeek= 'Tuesday' THEN 1
                WHEN dayOfWeek= 'Wednesday' THEN 2
                  WHEN dayOfWeek= 'Thursday' THEN 3
                   WHEN dayOfWeek= 'Friday' THEN 4
                WHEN dayOfWeek= 'Saturday' THEN 5
                ELSE 6
            END AS QuantityText,
            CONVERT_TZ(CONCAT(CURDATE() ,' ',availableAt),'+00:00',SUBSTRING(timezone, 5, 6)) as utcAvailableAt,
            CONVERT_TZ(CONCAT(CURDATE() ,' ',availableUntil),'+00:00',SUBSTRING(timezone, 5, 6)) as utcAvailableUntil
            from dataset 
     ) as utcData
     ) as data where data.utcDays='$weekDays' 
                     AND CAST(data.utcAvailableAt as time) <= '$currentTime' 
                     and CAST(data.utcAvailableUntil as time) >= '$currentTime'
    ";

    
    $dataProvider = new SqlDataProvider([
        'sql' => $query,
        'totalCount' => 21,
        'pagination' => [
            'pageSize' => 40,
        ],
    ]);
      
        return $dataProvider;
    }

    public function searchCoaches()
    {
                //echo date();die;
        $currentDate = gmdate('Y-m-d H:i:s');
        $currentTime = gmdate('H:i:s');
         $weekDays = date('w',strtotime($currentDate));
        $weekDays = ($weekDays==7) ? 6 : $weekDays-1;
        $query = "
        select * from (
        select * ,
        CASE 
              WHEN  DATE(utcAvailableAt)>CURDATE() then CASE when (QuantityText+1)=7 then 1 ELSE QuantityText+1 END
              WHEN  DATE(utcAvailableAt)< CURDATE() then CASE when QuantityText-1 in (0,-1) then 6 ELSE QuantityText-1 END
              WHEN  DATE(utcAvailableAt)=CURDATE() then QuantityText
              END as utcDays,TIME_TO_SEC(TIMEDIFF('$currentDate',utcAvailableUntil))/60 as diffCurrentDate
       from (
            select *,CONCAT(CURDATE() ,' ',availableAt) as fdvf,
            CASE
                WHEN dayOfWeek = 'Monday' THEN 0
                WHEN dayOfWeek= 'Tuesday' THEN 1
                WHEN dayOfWeek= 'Wednesday' THEN 2
                  WHEN dayOfWeek= 'Thursday' THEN 3
                   WHEN dayOfWeek= 'Friday' THEN 4
                WHEN dayOfWeek= 'Saturday' THEN 5
                ELSE 6
            END AS QuantityText,
            CONVERT_TZ(CONCAT(CURDATE() ,' ',availableAt),'+00:00',SUBSTRING(timezone, 5, 6)) as utcAvailableAt,
            CONVERT_TZ(CONCAT(CURDATE() ,' ',availableUntil),'+00:00',SUBSTRING(timezone, 5, 6)) as utcAvailableUntil
            from dataset 
     ) as utcData
     ) as data where data.utcDays='$weekDays' and data.diffCurrentDate > 30
    ";

    //echo $query;die;

    
    $dataProvider = new SqlDataProvider([
        'sql' => $query,
        'totalCount' => 21,
        'pagination' => [
            'pageSize' => 40,
        ],
    ]);
      
        return $dataProvider;
    }
}
