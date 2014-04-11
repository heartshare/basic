<?php

$this->breadcrumbs = array(
    '我的收藏' => array('admin'),
    '管理',
);
?>

<div class="box">
    <div class="box-title">我的收藏夹</div>
    <div class="box-content">
    <!--   <?php
$url=Yii::app()->baseUrl.'/item/';
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'wishlist-grid',
    'dataProvider' => $model->MyCollectSearch(),
//    'filter' => $model,
    'columns' => array(
        array(
            'class' => 'CLinkColumn',
            'header' =>'Title',
            'labelExpression' => '$data->item->title',
            'urlExpression' => 'Yii::app()->createUrl("item",array("view"=>$data->item->item_id))'
        ),
       array(
            'name' => 'price',
            'value' => '$data->item->price',
        ),
        array(
            'name' => 'stock',
            'value' => '$data->item->stock',
        ),
        array(
            'name' => 'create_time',
            'value' => 'date("Y-m-d", $data->create_time)',
            'htmlOptions' => array('style'=>'width:100px')
        ),
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{update}{delete}',
            'viewButtonUrl' => 'Yii::app()->createUrl("/item/view",
array("id" => $data->item_id))',
        ),
    ),
));
?>
        -->
        <table class="table table-bordered my-collect-table ">
          <thead>
          <tr >
           <td colspan="7" class="collect-checkbox" style="padding-top:10px;padding-bottom:0px">
           <span style="margin-left:10px;padding:0;"> <input type="checkbox" name="" id=""/>全选</span>
            <button class="btn btn-sm btn-success" style="margin-left:30px;margin:10px;padding:0;">加入购物车</button>
           </td>
          </tr>
          <tr>
            <th class="col-xs-5" colspan="3">商品详情</th>

            <th class="col-xs-1">价格</th>
            <th class="col-xs-1">库存</th>
            <th class="col-xs-2">收藏时间</th>
            <th class="col-xs-2">操作</th>
            </tr>
          </thead>
          <tbody>
            <tr>
             <td><input type="checkbox" name=""/></td>
             <td class="col-xs-2" >
             <a href=""><img src="../" title=""/></a>
             </td>             <!--图片-->
             <td class="col-xs-3 product-name" ><a href="">商品名称商品名称商品名称</a></td>         <!--商品名称-->
             <td class="col-xs-2" >129.00</td>                          <!--商品价格-->
             <td class="col-xs-1" >23</td>                              <!--库存-->
             <td class="col-xs-2" >2014-02-12</td>                        <!--收藏时间-->
             <td class="col-xs-2" >
               <a href="">加入购物车</a>
               <br/>
               <a href="">取消收藏</a>
             </td>
             </tr>
          </tbody>

        </table>

    </div>
</div>

