<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use app\models\Rol;
use app\models\User1;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Grupo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grupo-form">

    <?php $form = ActiveForm::begin(); ?>

   <?= $form->field($model, 'username')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(User1::find()->all(),'username','email','username'),
        'language' => 'en',
        'options' => ['placeholder' => 'Selecionar Usuario ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);?>

    <?= $form->field($model, 'rol')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Rol::find()->all(),'tipo','tipo'),
        'language' => 'en',
        'options' => ['placeholder' => 'Selecionar Rol ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
