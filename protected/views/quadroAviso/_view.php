<?php
/* @var $this QuadroAvisoController */
/* @var $data QuadroAviso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idquadro_aviso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idquadro_aviso), array('view', 'id'=>$data->idquadro_aviso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mensagens_idmensagens')); ?>:</b>
	<?php echo CHtml::encode($data->mensagens_idmensagens); ?>
	<br />


</div>