<?php
$this->breadcrumbs = array(
'收货地址' => array('admin'),
'管理',
);
?>

<div class="box">
    <div class="box-title">收货地址</div>
    <div class="box-content">
        <span id="item" style="margin-left:0px" >新建收货地址：</span>
        <!-- <?php $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider'=>$dataProvider,
        'columns'=>array(
        'contact_name',
        's.name',
        'c.name',
        'd.name',
        'address',
        'zipcode',
        'phone' ,
        'mobile_phone' ,
        'memo' ,
        array(
        'name' => 'is_default',
        'value' => 'Tbfunction::ShowYesOrNo($data->is_default)',
        ),
        array(
        'name' => 'create_time',
        'value' => 'date("Y-m-d", $data->create_time)',
        'htmlOptions' => array('style'=>'width:100px')
        ),
        array(
        'name' => 'update_time',
        'value' => 'date("Y-m-d", $data->update_time)',
        'htmlOptions' => array('style'=>'width:100px')
        ),
        array(
        'class' => 'CButtonColumn',
        'template' => '{view}{update}{delete}',
        'viewButtonUrl' => 'Yii::app()->createUrl("/member/delivery_address/view/id/".$data->contact_id)',
        ),
        ),
        )); ?>  -->
        <!--后面新改的会员中心 收货地址部分-->
       <form style="width:80%" class="form-horizontal" role="form">
        <div class="form-group">
            <label for="AddressResult_contact_name" class="col-xs-2 control-label">收件人：<span class="required">*</span></label>
            <div class="col-xs-10">
                <input class="form-control" name="AddressResult[contact_name]" id="AddressResult_contact_name"
                       type="text"/>
            </div>
        </div>
        <div class="form-group" style="height:40px; overflow:hidden;border:1px solid white">
            <lable class="col-xs-2 control-label" style="width:120px;padding-top:10px;margin-left:13px;"><b>所在地区：</b><span class="required">*</span></lable>
            <div style="width:480px;"class="col-xs-10">
                <div class="row" style="padding-left:20px" data-url="<?php echo Yii::app()->createUrl('order/getChildAreas'); ?>">
                    <?php
                                           $state_data = Area::model()->findAll("grade=:grade",
                    array(":grade" => 1));
                    $state = CHtml::listData($state_data, "area_id", "name");
                    $s_default = $model->isNewRecord ? '' : $model->state;
                    echo '&nbsp;' . CHtml::dropDownList('AddressResult[state]', $s_default, $state,
                    array(
                    'empty' => '请选择省份',
                    'ajax' => array(
                    'type' => 'GET', //request type
                    'url' => CController::createUrl('dynamiccities'), //url to call
                    'update' => '#AddressResult_city', //selector to update
                    'data' => 'js:"AddressResult_state="+jQuery(this).val()',
                    )));
                    //empty since it will be filled by the other dropdown
                    $c_default = $model->isNewRecord ? '' : $model->city;
                    if (!$model->isNewRecord) {
                    $city_data = Area::model()->findAll("parent_id=:parent_id",
                    array(":parent_id" => $model->state));
                    $city = CHtml::listData($city_data, "id", "name");
                    }
                    $city_update = $model->isNewRecord ? array() : $city;
                    echo '&nbsp;&nbsp;' . CHtml::dropDownList('AddressResult[city]', $c_default, $city_update,
                    array(
                    'empty' => '请选择城市',
                    'ajax' => array(
                    'type' => 'GET', //request type
                    'url' => CController::createUrl('dynamicdistrict'), //url to call
                    'update' => '#AddressResult_district', //selector to update
                    'data' => 'js:"AddressResult_city="+jQuery(this).val()',
                    )));
                    $d_default = $model->isNewRecord ? '' : $model->district;
                    if (!$model->isNewRecord) {
                    $district_data = Area::model()->findAll("parent_id=:parent_id",
                    array(":parent_id" => $model->city));
                    $district = CHtml::listData($district_data, "id", "name");
                    }
                    $district_update = $model->isNewRecord ? array() : $district;
                    echo '&nbsp;&nbsp;' . CHtml::dropDownList('AddressResult[district]', $d_default, $district_update,
                    array(
                    'empty' => '请选择地区',
                    )
                    );
                    ?>
                </div>
            </div>
        </div>

        <div class="form-group" style="height:35px; border:1px solid white">
            <label for="AddressResult_address" class="col-xs-2 control-label">街道地址: <span class="required">*</span></label>
            <div class="col-xs-10">
                <input
                        name="AddressResult[address]" id="AddressResult_address" type="text" class="form-control" />
            </div>
        </div>
        <div class="form-group" style="height:35px; border:1px solid white">
            <label for="AddressResult_zipcode" class=" col-xs-2 control-label">邮政编号: <span class="required">*</span></label>
            <div class="col-xs-10">
                <input
                        name="AddressResult[zipcode]" id="AddressResult_zipcode"class="form-control"  type="text"/>
            </div>
        </div>
        <div class="form-group" style="height:35px;border:1px solid white">

            <label for="AddressResult_mobile_phone" class="col-xs-2 control-label">手机 :<span class="required">*</span></label>
            <div class="col-xs-10">
                <input  name="AddressResult[mobile_phone]" id="AddressResult_mobile_phone" class="form-control"
                        type="text"/>
            </div>
        </div>
             <button type="button" id="address-save" class="btn btn-success col-xs-offset-2">保存</button>
        </form>
         <span id="item" style="margin:30px 0px 20px 0px;">已保存有效的地址:</span>
        <table class="table address-table"  >
            <thead>
            <tr>
                <th class="col-xs-1">收件人</th>
                <th class="col-xs-2">所在地区</th>
                <th class="col-xs-2">街道地址</th>
                <th class="col-xs-1">邮政编码</th>
                <th class="col-xs-2">手机</th>
                <th class="col-xs-2">&nbsp;</th>
                <th class="col-xs-2">操作</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>小明</td>
                <td>河北省秦皇岛市北戴河区</td>
                <td>11111</td>
                <td>1111111</td>
                <td>13338888899</td>
                <td><a href="">设为默认地址</a></td>
                <td><a href="">修改</a>|<a href="">删除</a></td>
            </tr>
            </tbody>

        </table>

    </div>


</div>
