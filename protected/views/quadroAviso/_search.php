<?php
/* @var $this QuadroAvisoController */
/* @var $model QuadroAviso */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idquadro_aviso'); ?>
		<?php echo $form->textField($model,'idquadro_aviso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mensagens_idmensagens'); ?>
		<?php echo $form->textField($model,'mensagens_idmensagens'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->