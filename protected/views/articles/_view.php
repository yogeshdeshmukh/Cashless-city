<?php
/* @var $this ArticlesController */
/* @var $data Articles */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('article_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->article_id), array('view', 'id'=>$data->article_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('article_name')); ?>:</b>
	<?php echo CHtml::encode($data->article_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('article_content')); ?>:</b>
	<?php echo CHtml::encode($data->article_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author_name')); ?>:</b>
	<?php echo CHtml::encode($data->author_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('article_active')); ?>:</b>
	<?php echo CHtml::encode($data->article_active); ?>
	<br />


</div>