<?php
/* @var $this VagaController */
/* @var $model Vaga */

$this->breadcrumbs=array(
	'Vagas'=>array('index'),
	$model->idvaga=>array('view','id'=>$model->idvaga),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vaga', 'url'=>array('index')),
	array('label'=>'Create Vaga', 'url'=>array('create')),
	array('label'=>'View Vaga', 'url'=>array('view', 'id'=>$model->idvaga)),
	array('label'=>'Manage Vaga', 'url'=>array('admin')),
);
?>

<h1>Update Vaga <?php echo $model->idvaga; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>