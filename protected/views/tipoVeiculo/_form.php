<?php
/* @var $this TipoVeiculoController */
/* @var $model TipoVeiculo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipo-veiculo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idtipo_veiculo'); ?>
		<?php echo $form->textField($model,'idtipo_veiculo'); ?>
		<?php echo $form->error($model,'idtipo_veiculo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dscTipo'); ?>
		<?php echo $form->textField($model,'dscTipo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'dscTipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->