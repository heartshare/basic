<?php
$this->breadcrumbs=array(
	'Shipping Methods'=>array('index'),
	$model->name=>array('view','shipping_method_id'=>$model->shipping_method_id),
	'Update',
);

$this->menu=array(
	array('label'=>'货运方法列表', 'icon'=>'list', 'url'=>array('index')),
	array('label'=>'创建货运方式', 'icon'=>'plus','url'=>array('create')),
	array('label'=>'查看货运方式', 'url'=>array('view', 'shipping_method_id'=>$model->shipping_method_id)),
	array('label'=>'管理货运方式', 'icon'=>'cog','url'=>array('admin')),
);
?>

<h3>更新货运方式 <?php echo $model->name; ?></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>