<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Funcionario', 'url'=>array('index')),
	array('label'=>'Manage Funcionario', 'url'=>array('admin')),
);
?>

<h1>Create Funcionario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>