<?php
$this->breadcrumbs=array(
	'商品列表'=>array('admin'),
	'创建',
);

$this->menu=array(
	array('label'=>'管理商品', 'url'=>array('admin')),
);
?>

<h1>创建商品</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>