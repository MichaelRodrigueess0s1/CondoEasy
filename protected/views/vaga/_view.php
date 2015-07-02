<?php
/* @var $this VagaController */
/* @var $data Vaga */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idvaga')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idvaga), array('view', 'id'=>$data->idvaga)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idapartamento')); ?>:</b>
	<?php echo CHtml::encode($data->idapartamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dscVaga')); ?>:</b>
	<?php echo CHtml::encode($data->dscVaga); ?>
	<br />


</div>