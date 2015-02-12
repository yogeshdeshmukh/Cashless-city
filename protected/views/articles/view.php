<?php
/* @var $this ArticlesController */
/* @var $model Articles */

$this->breadcrumbs=array(
	'Articles'=>array('index'),
	$model->article_id,
);

$this->menu=array(
	array('label'=>'List Articles', 'url'=>array('index')),
	array('label'=>'Create Articles', 'url'=>array('create')),
	array('label'=>'Update Articles', 'url'=>array('update', 'id'=>$model->article_id)),
	array('label'=>'Delete Articles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->article_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Articles', 'url'=>array('admin')),
);
?>

<h1>View Articles #<?php echo $model->article_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'article_id',
		'id',
		'article_name',
		'article_content',
		'author_name',
		'article_active',
	),
)); ?>
