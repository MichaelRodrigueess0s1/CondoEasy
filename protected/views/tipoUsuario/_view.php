<?php
/* @var $this TipoUsuarioController */
/* @var $data TipoUsuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtipo_usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtipo_usuario), array('view', 'id'=>$data->idtipo_usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dscTipo')); ?>:</b>
	<?php echo CHtml::encode($data->dscTipo); ?>
	<br />


</div>