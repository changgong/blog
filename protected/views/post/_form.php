<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>true,
	// 'enableClientValidation'=>true,
	// 'clientOptions'=>array(
	// 	'validateOnSubmit'=>true,
	// ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>50,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php $this->widget('ext.ckeditor.CKEditorWidget',array(
			'model'=>$model,
			'attribute'=>'content',
			'defaultValue'=>'Write content here.',
			'config'=>array(
				'height'=>'200px',
				'width'=>'80%',
				'toolbar'=>'Basic'),
			// 'ckEditor'=>Yii::app()->basePath.'/extensions/ckeditor/ckeditor.php',
			// 'ckBasePath'=>Yii::app()->getBaseUrl(true).'/protected/extensions/ckeditor/',
			));
		?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',Lookup::items('PostStatus')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tags'); ?>
		<?php echo $form->textField($model,'tags',array('size'=>50, 'maxlength'=>128)); ?>
		<?php echo $form->error($model,'tags'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
