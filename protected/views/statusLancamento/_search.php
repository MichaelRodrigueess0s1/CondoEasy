<?php
/* @var $this StatusLancamentoController */
/* @var $model StatusLancamento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idstatus_lancamento'); ?>
		<?php echo $form->textField($model,'idstatus_lancamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dsc_status_lancamento'); ?>
		<?php echo $form->textField($model,'dsc_status_lancamento',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->