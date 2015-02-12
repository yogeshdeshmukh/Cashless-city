<?php
/* @var $this ArticlesController */
/* @var $model Articles */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'articles-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>


    <div class="row">
        <?php echo $form->labelEx($model, 'article_name'); ?>
        <?php echo $form->textField($model, 'article_name', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'article_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'author_name'); ?>
        <?php echo $form->textField($model, 'author_name', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'author_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'article_content'); ?>
        <?php echo $form->textArea($model, 'article_content', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'article_content'); ?>
    </div>
    <?php
  if(Yii::app()->getModule('user')->isAdmin()){ ?>
    <div class="row">
        <?php echo $form->labelEx($model, 'article_active'); ?>
        <?php echo $form->dropDownList($model, 'article_active',  Articles::itemAlias('ArticleStatus')); ?>
        <?php echo $form->error($model, 'article_active'); ?>
    </div>
  <?php }
    if(Yii::app()->getModule('user')->isAuthor()){ ?>
    <div class="row">
        <?php echo $form->labelEx($model, 'article_posted'); ?>
        <?php echo $form->dropDownList($model, 'article_posted', Articles::itemAlias('ArticlePosted')); ?>
        <?php echo $form->error($model, 'article_posted'); ?>
    </div>
    <?php } ?>
    <span style="margin:20px;"></span>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-inverse')); ?>
    </div>

    <span style="margin:10px;"></span>


    <div class="row buttons">
        <?php echo CHtml::resetButton('Reset'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->

