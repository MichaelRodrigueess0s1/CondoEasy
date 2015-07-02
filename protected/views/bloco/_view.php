<?php
/* @var $this BlocoController */
/* @var $data Bloco */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idbloco')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idbloco), array('view', 'id'=>$data->idbloco)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcondominio')); ?>:</b>
	<?php echo CHtml::encode($data->idcondominio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dscPredio')); ?>:</b>
	<?php echo CHtml::encode($data->dscPredio); ?>
	<br />


</div>