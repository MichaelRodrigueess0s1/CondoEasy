<?php
/* @var $this VagaController */
/* @var $model Vaga */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idvaga'); ?>
		<?php echo $form->textField($model,'idvaga'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idapartamento'); ?>
		<?php echo $form->textField($model,'idapartamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dscVaga'); ?>
		<?php echo $form->textField($model,'dscVaga',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->