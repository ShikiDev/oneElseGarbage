<?php

class CatalogController extends Controller
{
	public function actionIndex()
	{
        if(Yii::app()->request->isAjaxRequest){

            if(isset($_POST['data'])){
                if($_POST['type'] == 'spec'){
                    $data = $_POST['data'];
                    $model = Season::model()->with('rates','idHotel')->findAll(array('group'=>'season.season','having'=>'count(rates.id) > '.$data));
                    echo CHtml::encode(print_r($model));
                }elseif($_POST['type'] == 'usual'){

                    $connection = Yii::app()->db;
                    $sql = ("SELECT hot_hotel.hotel_name,hot_season.season
                                        FROM hot_season INNER JOIN hot_hotel ON hot_season.id_hotel = hot_hotel.id 
                                        INNER JOIN hot_rate ON hot_rate.id_season = hot_season.id 
                                        GROUP BY hot_season.season HAVING count(hot_rate.id)> {$_POST['data']}");
                    $command = $connection->createCommand($sql);
                    $result = $command->query();
                    $data = $result->readAll();

                    echo CHtml::encode(print_r($data));
                }
            }else{

            }
            Yii::app()->end();
        }

		$this->render('index');

	}

}