<?php
/* @var $this MensagensController */
/* @var $model Mensagens */

$this->breadcrumbs=array(
	'Mensagens'=>array('index'),
	$model->idmensagens,
);

$this->menu=array(
	array('label'=>'List Mensagens', 'url'=>array('index')),
	array('label'=>'Create Mensagens', 'url'=>array('create')),
	array('label'=>'Update Mensagens', 'url'=>array('update', 'id'=>$model->idmensagens)),
	array('label'=>'Delete Mensagens', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idmensagens),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mensagens', 'url'=>array('admin')),
);
?>

<h1>View Mensagens #<?php echo $model->idmensagens; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idmensagens',
		'conteudo',
		'data',
		'Usuario_idUsuario',
	),
)); ?>
