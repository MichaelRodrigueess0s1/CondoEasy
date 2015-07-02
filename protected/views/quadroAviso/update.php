<?php
/* @var $this QuadroAvisoController */
/* @var $model QuadroAviso */

$this->breadcrumbs=array(
	'Quadro Avisos'=>array('index'),
	$model->idquadro_aviso=>array('view','id'=>$model->idquadro_aviso),
	'Update',
);

$this->menu=array(
	array('label'=>'List QuadroAviso', 'url'=>array('index')),
	array('label'=>'Create QuadroAviso', 'url'=>array('create')),
	array('label'=>'View QuadroAviso', 'url'=>array('view', 'id'=>$model->idquadro_aviso)),
	array('label'=>'Manage QuadroAviso', 'url'=>array('admin')),
);
?>

<h1>Update QuadroAviso <?php echo $model->idquadro_aviso; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>