<?php
/* @var $this ArticlesController */
/* @var $model Articles */

$this->breadcrumbs=array(
	'Articles'=>array('index'),
	$model->article_id=>array('view','id'=>$model->article_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Articles', 'url'=>array('index')),
	array('label'=>'Create Articles', 'url'=>array('create')),
	array('label'=>'View Articles', 'url'=>array('view', 'id'=>$model->article_id)),
	array('label'=>'Manage Articles', 'url'=>array('admin')),
);
?>

<h1>Update Articles <?php echo $model->article_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>