<?php
/* @var $this MensagensController */
/* @var $model Mensagens */

$this->breadcrumbs=array(
	'Mensagens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mensagens', 'url'=>array('index')),
	array('label'=>'Manage Mensagens', 'url'=>array('admin')),
);
?>

<h1>Create Mensagens</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>