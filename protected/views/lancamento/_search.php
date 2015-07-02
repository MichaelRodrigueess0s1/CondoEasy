<?php
/* @var $this LancamentoController */
/* @var $model Lancamento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idlancamentos'); ?>
		<?php echo $form->textField($model,'idlancamentos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_lancamento'); ?>
		<?php echo $form->textField($model,'tipo_lancamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor'); ?>
		<?php echo $form->textField($model,'valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dsc_lancamento'); ?>
		<?php echo $form->textField($model,'dsc_lancamento',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idstatus_lancamento'); ?>
		<?php echo $form->textField($model,'idstatus_lancamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idbloco'); ?>
		<?php echo $form->textField($model,'idbloco'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->