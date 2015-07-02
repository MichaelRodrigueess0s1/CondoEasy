<?php
/* @var $this CondominioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Condominios',
);

$this->menu=array(
	array('label'=>'Create Condominio', 'url'=>array('create')),
	array('label'=>'Manage Condominio', 'url'=>array('admin')),
);
?>

<h1>Condominios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
