<?php
$this->breadcrumbs=array(
	'Payment Methods'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List PaymentMethod', 'icon'=>'list', 'url'=>array('index')),
	array('label'=>'Create PaymentMethod', 'icon'=>'plus','url'=>array('create')),
	array('label'=>'Update PaymentMethod', 'icon'=>'pencil','url'=>array('update', 'id'=>$model->payment_method_id)),
	array('label'=>'Delete PaymentMethod', 'icon'=>'trash', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->payment_method_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PaymentMethod', 'icon'=>'cog','url'=>array('admin')),
);
?>

<h3>查看支付方式 #<?php echo $model->payment_method_id; ?></h3>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'payment_method_id',
		'code',
		'name',
		'desc',
		'config',
		'enabled',
		'is_cod',
		'is_online',
		'sort_order',
	),
)); ?>
