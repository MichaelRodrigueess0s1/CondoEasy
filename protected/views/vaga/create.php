<?php
/* @var $this VagaController */
/* @var $model Vaga */

$this->breadcrumbs=array(
	'Vagas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vaga', 'url'=>array('index')),
	array('label'=>'Manage Vaga', 'url'=>array('admin')),
);
?>

<h1>Create Vaga</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>