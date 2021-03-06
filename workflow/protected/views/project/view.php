<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->project_id,
);

$this->menu=array(
	array('label'=>'List Project', 'url'=>array('index')),
	array('label'=>'Create Project', 'url'=>array('create')),
	array('label'=>'Update Project', 'url'=>array('update', 'id'=>$model->project_id)),
	array('label'=>'Delete Project', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->project_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Project', 'url'=>array('admin')),
	//array('label'=>'Create story', 'url'=>array('story/create')),
);
?>

<h1>View Project #<?php echo $model->project_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'label'=>'Project Owner',
			'type'=>'raw',
			'value'=>$model->getProjectOwnerName()),
		'project_name',
		'project_description',
		array(
			'label'=>'Project Owner',
			'type'=>'raw',
			'value'=>$model->getProjectStatus()),
		array(
			'label'=>'Date start',
			'type'=>'raw',
			'value'=>date("d - m - Y",$model->date_start)),
		array(
			'label'=>'Date end',
			'type'=>'raw',
			'value'=>date("d - m - Y",$model->end)),
	),
)); ?>
