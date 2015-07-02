<?php
/* @var $this ApartamentoController */
/* @var $data Apartamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idapartamento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idapartamento), array('view', 'id'=>$data->idapartamento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idbloco')); ?>:</b>
	<?php echo CHtml::encode($data->idbloco); ?>
	<br />


</div>