<?php
/* @var $this VagaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vagas',
);

$this->menu=array(
	array('label'=>'Create Vaga', 'url'=>array('create')),
	array('label'=>'Manage Vaga', 'url'=>array('admin')),
);
?>

<h1>Vagas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
