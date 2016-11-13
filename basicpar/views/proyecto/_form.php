<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Proyecto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyecto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->textInput(['maxlength' => true]) ?>

     <?php echo $form->field($model,'fecha_inicio')->
     widget(DatePicker::className(),[
        'name' => 'dp_1',
        'options'=>array('style'=>'width:180px'),
        'type' => DatePicker::TYPE_INPUT,
        'value' =>'',
        'pluginOptions' => [
            'orientation' => 'down',
            'autoclose'=>true,
            'format' => 'yyyy/mm/dd',
            ]
    ]) ?>
    <!--
        TYPE_COMPONENT_PREPEND 
        'size' => 'lg',
    resaltar fecha actual 'todayHighlight' => true,(va en pluginOptions)
    -->
    <!--'options' => ['placeholder' => 'Digita la fecha de inicio ...'],-->
    <!--'options'=>array('style'=>'width:180px')-->
     <?php echo $form->field($model,'fecha_cierre')->
     widget(DatePicker::className(),[
        'name' => 'dp_1',
        'type' => DatePicker::TYPE_INPUT,
        'value' => '',
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy/mm/dd',]
        ]) 
    ?>

    <!-- enviar por defecto el estado de proyecto sin pedir el valor al usuario, cailla sesabilitada -->
    <?= $form->field($model, 'estado')->hiddenInput(['value'=>'abierto'])->label(false)?>

    <!-- enviamos el nombre del usuario que esta creando el proyecto -->
    <?= $form->field($model, 'username')->hiddenInput(['value'=>Yii::$app->user->identity->username])->label(
        false)?>

    <?= $form->field($model, 'rol')->hiddenInput(['value'=>'administrador'])->label(false)?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear Proyecto' : 'Guardar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
