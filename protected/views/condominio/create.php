<?php
/* @var $this CondominioController */
/* @var $model Condominio */

$this->breadcrumbs=array(
	'Condominios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Condominio', 'url'=>array('index')),
	array('label'=>'Manage Condominio', 'url'=>array('admin')),
);
?>

<h1>Create Condominio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>