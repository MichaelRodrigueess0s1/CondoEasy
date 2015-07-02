<?php
/* @var $this BlocoController */
/* @var $model Bloco */

$this->breadcrumbs=array(
	'Blocos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bloco', 'url'=>array('index')),
	array('label'=>'Manage Bloco', 'url'=>array('admin')),
);
?>

<h1>Create Bloco</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>