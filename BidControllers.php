<?php

namespace app\controllers;
use yii;
use yii\web\Controllers;
use app\models\Bid;

class BidController extends Controller{

  public function actionSubmit()
  {
    $model = new Bid();

    if ($model->load(Yii::$app->request->post()) && $model->()) {
      return $this->render(['view', 'id' => $model->id]);
      // code...
    }

    return $this->render('submit', ['model'=>$model],);
  }
}
 ?>
