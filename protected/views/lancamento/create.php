<?php
/* @var $this LancamentoController */
/* @var $model Lancamento */

$this->breadcrumbs=array(
	'Lancamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Lancamento', 'url'=>array('index')),
	array('label'=>'Manage Lancamento', 'url'=>array('admin')),
);
?>

<h1>Create Lancamento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>