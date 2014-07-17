<?php
/* @var $this TemasController */
/* @var $model Temas */

$this->breadcrumbs=array(
	'Temases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Temas', 'url'=>array('index')),
	array('label'=>'Create Temas', 'url'=>array('create')),
	array('label'=>'View Temas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Temas', 'url'=>array('admin')),
);
?>

<h1>Update Temas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>