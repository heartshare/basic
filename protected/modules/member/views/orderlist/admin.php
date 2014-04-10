<?php
$this->breadcrumbs = array(
    '我的订单' => array('admin'),
    '管理',
);
?>

<div class="box">
    <div class="box-title">管理订单</div>
    <div class="box-content clearfix">
      <!--  <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'order-grid',
            'dataProvider' => $model->MyOrderSearch(),
            'filter' => $model,
            'columns' => array(
                'order_id',
                array(
                    'name' => 'status',
                    'value' => 'Tbfunction::showOrderStatus($data->status)',
                    'filter' => Tbfunction::ReturnOrderStatus(),
                ),
                'total_fee',
                'ship_fee',
                'pay_fee',
                array(
                    'name' => 'create_time',
                    'value' => 'date("Y-m-d H:i:s", $data->create_time)',
                ),
                array(
                    'name' => 'pay_status',
                    'value' => 'Tbfunction::showPayStatus($data->pay_status)',
                    'filter' => Tbfunction::ReturnPayStatus(),
                ),
                array(
                    'name' => 'ship_status',
                    'value' => 'Tbfunction::showShipStatus($data->ship_status)',
                    'filter' => Tbfunction::ReturnShipStatus(),
                ),
                array(
                    'name' => 'payment_method_id',
                    'value' => 'Tbfunction::showPayMethod($data->payment_method_id)',
                    'filter' => Tbfunction::ReturnPayMethod(),
                ),
                array(
                    'value' => 'Tbfunction::view_user($data->order_id)',
                ),
            ),
        ));
        ?>  -->
        <div class="reminde-box clearfix" id="Reminde-box" data-spm="7">
            <h4 class="pull-left">我的交易提醒：</h4>
            <ul class="pull-left clearfix" >
                <li class="pull-left"><a href="">待付款<span class="num">(0)</span></a></li>
                <li class="pull-left"><a href="">待确认收货<span class="num">(4)</span></a></li>
                <li class="pull-left"><a href="">待评价<span class="num">(4)</span></a></li>
            </ul>

        </div>
        <div style="padding-top: 5px">
            <label for="BaobeiName">宝贝名称：</label>
            <input type="text" size="50" id="BaobeiName" name="auctionTitle" value="" maxlength="30">
            <button class="btn btn-sm btn-success" type="submit" data-point-url="">搜索</button>
            <span class="glyphicon glyphicon-trash" style="margin-left: 400px;">
                </span>订单回收站
        </div>
         <table class="table table-bordered my-order-table">
         <colgroup>
          <col class="selector">
          <col class="baobei">
          <col class="price">
          <col class="quantity">
          <col class="after-service">
          <col class="amount">
          <col class="trade-status">
          <col class="operate">

         </colgroup>
           <thead>

            <tr class="col-name">

            <th class="baobei col-xs-4" colspan="2">宝贝</th>
            <th class="price col-xs-1">单价(元)</th>
            <th class="quantity col-xs-1">数量</th>
            <th class="after-service col-xs-2">售后</th>
            <th class="amount col-xs-2">实付款(元)</th>
            <th class="trade-status col-xs-1">
           <div class="trade-status">
           <select id="J_TradeStatusHandle">
           <option data-msg="交易状态" value="ALL">交易状态</option>
           <option data-msg="等待买家付款" value="NOT_PAID">等待买家付款</option>
           <option data-msg="买家已付款" value="PAID">买家已付款</option>
           <option data-msg="卖家已发货" value="SEND">卖家已发货</option>
           <option data-msg="交易成功" value="SUCCESS">交易成功</option>
           <option data-msg="交易关闭" value="DROP">交易关闭</option>
           <option data-msg="退款中的订单" value="REFUNDING">退款中的订单</option>
           </select>

           </div>
            </th>
            <th class="remark col-xs-1">交易操作</th>

            </tr>
            <tr class="sep-row"><td colspan="9"></td></tr>
            <tr class="toolbar skin-gray">
            <td colspan="7">
           <label><input type="checkbox" class="J_AllSelector all-selector">全选</label>
            <a>合并付款</a>
           <a href="javascript:void(0)">合并代付</a>
            <a href="javascript:void(0)">批量确认收货</a>
            <span id="J_xCardTip" style="display: none;">如想使用信用卡付款，请只选择带有 <img src="http://a.tbcdn.cn/sys/common/icon/trade/xcard.png" alt="支持信用卡支付" title="支持信用卡支付"> 标识的宝贝</span>
             </td>

           <td class="last-col" colspan="2">



           <div class="paginator-top">

           <div class="paginator-previous-grey g-u" href="" hidefocus="true">
           <span class="paginator-arrow paginator-arrow-left-grey"></span>
           </div>


           </div>
           </td>
            </tr>
           </thead>
         <tbody  class="">
         <tr class="sep-row"><td colspan="8"></td></tr>
         <tr class="order-hd">
             <td colspan="8">
          <span class="no">
          <label>
              <input type="checkbox" class="" id="" name="biz_order_id" value="">
              订单编号：<span class="order-num">604886404755306</span>
          </label>
         <input type="hidden" name="payOrderId" id="" value="">
         <input type="hidden" name="tradeStatus" id="" value="">
          </span>
                 <span class="deal-time">成交时间：2014-04-07 13:32</span>

             </td>
         </tr>
         <tr id="" class="xiangqing">
             <td class="">
                 <a target="_blank" hidefocus="true" title="查看宝贝详情" href="../" class="">
                     <img alt="抱歉，图片不能正常显示" src=" ">
                 </a>
             </td>                    <!--商品图片-->
             <td>
                 <div class="desc">
                     <a class="baobei-name" target="_blank" href="">
                        商品名称 商品名称
                     </a>

                     <div class="spec" title="">
                         <span>颜色: 白色1000</span><span>尺码: L</span>
                     </div>
                 </div>

             </td>                   <!--商品名称-->
             <td class="price" title="103.00">103.00</td>               <!--商品价格-->
             <td class="quantity" title="1">1                             <!--商品数量-->
             </td>
             <td class="after-service">                                  <!--申请退款-->
         退款/退货
             </td>
             <td class="amount" rowspan="1">                              <!--实付费-->
                 <strong>113.00</strong>
                 <p class="post-type">
                     (含快递:10.00)
                 </p>
             </td>
             <td class="trade-status" rowspan="1">
              <a href=""> 卖家已发货</a>    <br/>
         <span>
            <a href=""> 订单详情</a>
         </span><br/>
            <a href="">查看物流</a>
             </td>                                                       <!--发货状态 订单详情  查看物流-->
             <td class="operate" rowspan="1">
               <span class="skin-blue">
        <a href=""> 确认收货</a>
         </span>
             </td>                                                       <!--确认收货-->

         </tbody>
         </table>

    </div>
</div>