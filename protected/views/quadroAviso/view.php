<?php
/* @var $this QuadroAvisoController */
/* @var $model QuadroAviso */

$this->breadcrumbs=array(
	'Quadro Avisos'=>array('index'),
	$model->idquadro_aviso,
);

$this->menu=array(
	array('label'=>'List QuadroAviso', 'url'=>array('index')),
	array('label'=>'Create QuadroAviso', 'url'=>array('create')),
	array('label'=>'Update QuadroAviso', 'url'=>array('update', 'id'=>$model->idquadro_aviso)),
	array('label'=>'Delete QuadroAviso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idquadro_aviso),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage QuadroAviso', 'url'=>array('admin')),
);
?>

<h1>View QuadroAviso #<?php echo $model->idquadro_aviso; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idquadro_aviso',
		'mensagens_idmensagens',
	),
)); ?>
