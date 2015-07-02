<?php
/* @var $this StatusLancamentoController */
/* @var $model StatusLancamento */

$this->breadcrumbs=array(
	'Status Lancamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StatusLancamento', 'url'=>array('index')),
	array('label'=>'Manage StatusLancamento', 'url'=>array('admin')),
);
?>

<h1>Create StatusLancamento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>