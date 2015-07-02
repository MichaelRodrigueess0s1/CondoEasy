<?php
/* @var $this MensagensController */
/* @var $data Mensagens */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmensagens')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idmensagens), array('view', 'id'=>$data->idmensagens)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conteudo')); ?>:</b>
	<?php echo CHtml::encode($data->conteudo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_idUsuario); ?>
	<br />


</div>