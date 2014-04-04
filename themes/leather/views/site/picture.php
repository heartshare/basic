<div class="warp_banner index_bg01" id="mainbody">
    <div id="slides" class="banner">
        <a class="slidesjs-previous slidesjs-navigation" href="#" style="top: 240px;width: 43px;position: absolute;left: 0;z-index: 9999;">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/image/banner_l.png', '上一页', array('width' => '43', 'height' => '43')); ?>
        </a>
        <?php
        $i = 0;
        foreach ($ads as $ad) {
            $i++;
            ?>
                <div id="banner_pic_$i">
                    <a href="<?php echo $ad->url;?>" target="_blank">
                        <img alt=<?php echo $ad->title;?> src=<?php echo $ad->pic;?> width="1180" height="500">
                    </a>
                </div>
<?php
        }
        ?>
        <a class="slidesjs-next slidesjs-navigation" href="#" style="top: 240px;width: 43px;position: absolute;right: 0;z-index: 9999;">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/image/banner_r.png', '下一页', array('width' => '43', 'height' => '43')); ?>
        </a>
    </div>
</div>