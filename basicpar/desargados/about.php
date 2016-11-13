<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '  ---- ACERCA DE SCRUMUC ----';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

   <div id="contenido">

    	<p class="lead">
          
            <br>
            Herramienta que permite la gestión de proyectos,
            mediante el planeamiento, la organización, la motivación y el
            control de los recursos, con el propósito de alcanzar los
            objetivos del proyecto.
            <br>
            <br>
            <?=  Html::img('@web/images/sanl.jpg', ['alt'=>'Santiago']);?>
			 Nombre: Santiago Lopez
            <br>
            <br>
            <?=  Html::img('@web/images/cris.jpg', ['alt'=>'Cristian']);?>
			 Nombre: Cristian Arias
            <br>
            <br>
            <?=  Html::img('@web/images/cat.jpg', ['alt'=>'Catherine']);?>
			 Nombre: Catherine Valencia
            <br>
            <br>
            <?=  Html::img('@web/images/sang.jpg', ['alt'=>'SantiagoG']);?>
			 Nombre: Santiago Garcia
            <br>
            <br>
            <?=  Html::img('@web/images/kev.jpg', ['alt'=>'Kevin']);?>
			 Nombre: Kevin Chantre
            <br>
            <br>
        </p>
    </div>

    
</div>
