<?php
use yii;
use yii\web\controller;
use app\models\ProductRequest;

class AdminProductController extends Controller {
  public fuction actionCreate(){
    $model = newProductRequest();

    if ($model->load(Yii::$app->request->post()) && $model->save())

    return $this->redirect(['view', 'id' => $model->id]);

  }

  return $this->render('create', ['model'=>$model,]);
}
?>
