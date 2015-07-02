<?php
/* @var $this QuadroAvisoController */
/* @var $model QuadroAviso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'quadro-aviso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idquadro_aviso'); ?>
		<?php echo $form->textField($model,'idquadro_aviso'); ?>
		<?php echo $form->error($model,'idquadro_aviso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mensagens_idmensagens'); ?>
		<?php echo $form->textField($model,'mensagens_idmensagens'); ?>
		<?php echo $form->error($model,'mensagens_idmensagens'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->