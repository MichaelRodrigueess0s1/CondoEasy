<?php
/* @var $this QuadroAvisoController */
/* @var $model QuadroAviso */

$this->breadcrumbs=array(
	'Quadro Avisos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List QuadroAviso', 'url'=>array('index')),
	array('label'=>'Manage QuadroAviso', 'url'=>array('admin')),
);
?>

<h1>Create QuadroAviso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>