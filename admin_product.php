<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
$this->title ='Create Product Request';
$this->params['brfeadcrumbs']['label' => 'Product Requests', 'url' => ['index']];
$this->params['brfeadcrumbs'][] = $this->title;
 ?>

 <h1><?= Html::encode($this->title) ?></h1>

 <div class="product-request-form>">
   <?php $form = ActivationForm::begin(); ?>

   <?= $form->field($model, 'name')-> textInput(['maxlength' => true]) ?>
      <?= $form->field($model, 'description')-> textarea(['rows' => 4]) ?>
         <?= $form->field($model, 'deadline')-> textInput(['type' =>'datetime-local']) ?>

         <div class="form-group">
           <?= Html::submitButton('create', ['class' => 'btn btn-success']) ?>
         </div>

         <?php ActiveForm::end(); ?>
       </div>
