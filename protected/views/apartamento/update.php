<?php
/* @var $this ApartamentoController */
/* @var $model Apartamento */

$this->breadcrumbs=array(
	'Apartamentos'=>array('index'),
	$model->idapartamento=>array('view','id'=>$model->idapartamento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Apartamento', 'url'=>array('index')),
	array('label'=>'Create Apartamento', 'url'=>array('create')),
	array('label'=>'View Apartamento', 'url'=>array('view', 'id'=>$model->idapartamento)),
	array('label'=>'Manage Apartamento', 'url'=>array('admin')),
);
?>

<h1>Update Apartamento <?php echo $model->idapartamento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>