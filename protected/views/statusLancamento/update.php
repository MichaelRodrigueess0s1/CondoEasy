<?php
/* @var $this StatusLancamentoController */
/* @var $model StatusLancamento */

$this->breadcrumbs=array(
	'Status Lancamentos'=>array('index'),
	$model->idstatus_lancamento=>array('view','id'=>$model->idstatus_lancamento),
	'Update',
);

$this->menu=array(
	array('label'=>'List StatusLancamento', 'url'=>array('index')),
	array('label'=>'Create StatusLancamento', 'url'=>array('create')),
	array('label'=>'View StatusLancamento', 'url'=>array('view', 'id'=>$model->idstatus_lancamento)),
	array('label'=>'Manage StatusLancamento', 'url'=>array('admin')),
);
?>

<h1>Update StatusLancamento <?php echo $model->idstatus_lancamento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>