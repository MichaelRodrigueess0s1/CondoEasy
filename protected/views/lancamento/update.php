<?php
/* @var $this LancamentoController */
/* @var $model Lancamento */

$this->breadcrumbs=array(
	'Lancamentos'=>array('index'),
	$model->idlancamentos=>array('view','id'=>$model->idlancamentos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lancamento', 'url'=>array('index')),
	array('label'=>'Create Lancamento', 'url'=>array('create')),
	array('label'=>'View Lancamento', 'url'=>array('view', 'id'=>$model->idlancamentos)),
	array('label'=>'Manage Lancamento', 'url'=>array('admin')),
);
?>

<h1>Update Lancamento <?php echo $model->idlancamentos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>