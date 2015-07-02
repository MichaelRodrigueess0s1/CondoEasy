<?php
/* @var $this BlocoController */
/* @var $model Bloco */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idbloco'); ?>
		<?php echo $form->textField($model,'idbloco'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcondominio'); ?>
		<?php echo $form->textField($model,'idcondominio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dscPredio'); ?>
		<?php echo $form->textField($model,'dscPredio',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->