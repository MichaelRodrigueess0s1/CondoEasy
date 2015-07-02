<?php
/* @var $this VeiculoController */
/* @var $data Veiculo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('placa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->placa), array('view', 'id'=>$data->placa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idveiculo')); ?>:</b>
	<?php echo CHtml::encode($data->idveiculo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelo')); ?>:</b>
	<?php echo CHtml::encode($data->modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marca')); ?>:</b>
	<?php echo CHtml::encode($data->marca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fabricante')); ?>:</b>
	<?php echo CHtml::encode($data->fabricante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_veiculo_idtipo_veiculo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_veiculo_idtipo_veiculo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_idUsuario); ?>
	<br />


</div>