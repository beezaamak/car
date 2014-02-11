<table width="600" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td align="center" style="border-bottom:1px dotted #CCCCCC;" colspan="5">
            <p><img src="images/LOGO sakon.jpg" width="79" height="93" />
                <br />
                <span class="txtBlackBold">รายละเอียดการขออนุญาตใช้รถยนต์ส่วนกลาง</span><br />
                <span class="txtGraySmall">หน่วยยานภาหนะ มหาวิทยาลัยราชภัฏสกลนคร</span>
            </p>
            <p>&nbsp; </p>
        </td>
    </tr>
    <tr>
        <td width="15" height="25">&nbsp;</td>
        <td width="122" height="25" align="left" class="txtBlackBold"><?php echo $model->getAttributeLabel('paper_no'); ?></td>
        <td width="141" height="25" align="left" class="txtGraySmall"><?php echo $model->paper_no; ?></td>
        <td width="91" align="left" class="txtBlackBold"><?php echo $model->getAttributeLabel('create_at'); ?></td>
        <td width="231" align="left" class="txtGraySmall"><?php echo $model->create_at; ?></td>
    </tr>
    <tr>
        <td height="25">&nbsp;</td>
        <td height="25" class="txtBlackBold"><?php echo $model->getAttributeLabel('member_id'); ?></td>
        <td height="25" colspan="3" class="txtGraySmall"><?php echo $model->member->name; ?></td>
    </tr>
    <tr>
        <td height="25">&nbsp;</td>
        <td height="25" class="txtBlackBold"><?php echo $model->getAttributeLabel('tel'); ?></td>
        <td height="25" colspan="3" class="txtGraySmall"><?php echo $model->tel; ?></td>
    </tr>
    <tr>
        <td height="25">&nbsp;</td>
        <td height="25" class="txtBlackBold"><?php echo $model->getAttributeLabel('go'); ?></td>
        <td height="25" class="txtGraySmall"><?php echo $model->go; ?></td>  
        <td height="25" class="txtBlackBold"><?php echo $model->getAttributeLabel('request'); ?></td>
        <td height="25" class="txtGraySmall"><?php echo $model->request; ?></td>
    </tr>
    <tr>
        <td height="0">&nbsp;</td>
        <td height="25" class="txtBlackBold"><?php echo $model->getAttributeLabel('length_go'); ?></td>
        <td height="0" class="txtGraySmall"><?php echo $model->length_go; ?></td>
        <td height="0" class="txtBlackBold">&nbsp;</td>
        <td height="12" class="txtGraySmall">&nbsp;</td>
    </tr>
    <tr>
        <td height="0">&nbsp;</td>
        <td height="25" class="txtBlackBold"><?php echo $model->getAttributeLabel('num_person'); ?></td>
        <td height="0" class="txtGraySmall"><?php echo $model->num_person; ?></td>
        <td height="0" class="txtBlackBold">&nbsp;</td>
        <td height="13" class="txtGraySmall">&nbsp;</td>
    </tr>
    <tr>
        <td height="0">&nbsp;</td>
        <td height="25" class="txtBlackBold"><?php echo $model->getAttributeLabel('responsible'); ?></td>
        <td height="0" class="txtGraySmall"><?php echo $model->responsible; ?></td>
        <td height="0" class="txtBlackBold">&nbsp;</td>
        <td height="25" class="txtGraySmall">&nbsp;</td>
    </tr>
    <tr>
        <td height="0">&nbsp;</td>
        <td height="25" class="txtBlackBold"><?php echo $model->getAttributeLabel('place_id'); ?></td>
        <td height="0" class="txtGraySmall"><?php echo $model->place->name; ?></td>
        <td height="0" class="txtBlackBold">&nbsp;</td>
        <td height="12" class="txtGraySmall">&nbsp;</td>
    </tr>
    <tr>
        <td height="0">&nbsp;</td>
        <td height="25" class="txtBlackBold"><?php echo $model->getAttributeLabel('departure_time'); ?></td>
        <td height="0" colspan="2" class="txtGraySmall"><?php echo Tools::DateTimeToShow($model->departure_time, '/', true); ?></td>
        <td height="13" class="txtGraySmall">&nbsp;</td>
    </tr>
    <tr>
        <td height="25">&nbsp;</td>
        <td height="25" class="txtBlackBold"><?php echo $model->getAttributeLabel('back_time'); ?></td>
        <td height="25" colspan="2" class="txtGraySmall"><?php echo Tools::DateTimeToShow($model->back_time, '/', true); ?></td>
        <td height="25" class="txtGraySmall">&nbsp;</td>
    </tr>
</table>

<?php if ($model->status == 0) { ?>
    <div class="row buttons">
        <?php echo CHtml::button('รับเรื่อง', array('onClick' => 'if(confirm("คุณต้องการรับเรื่องหรือไม่?")){window.location="' . CHtml::normalizeUrl(array('accept', 'id' => $model->paper_approval_id)) . '"}')); ?>
    </div>
    <?php
} else {
    if ($model->status == 2 && $model->paperDetailAccept != null) {
        ?>
        <table width="600" border="0" cellspacing="0" cellpadding="0" style="border-top:1px dotted #CCCCCC;">
            <tr>
                <td width="15" height="20" align="left" class="txtBlackBold" style="border-bottom:1px dotted #CCCCCC;">&nbsp;</td>
                <td width="117" align="left" class="txtBlackBold" style="border-bottom:1px dotted #CCCCCC;"><span class="txtBlackBold" style="border-bottom:1px dotted #CCCCCC;">สถานะ</span></td>
                <td width="156" height="20" align="left" class="txtPinkBold" style="border-bottom:1px dotted #CCCCCC;"><?php echo Status::$paper[$model->status]; ?></td>
                <td width="91" height="20" align="left" class="txtBlackBold" style="border-bottom:1px dotted #CCCCCC;">รถที่ให้บริการ</td>
                <td width="221" align="left" class="txtPinkBold" style="border-bottom:1px dotted #CCCCCC;"><?php echo $model->paperDetailAccept->car->name; ?></td>
            </tr>
            <tr>
                <td height="20" align="center">&nbsp;</td>
                <td height="20" align="left" class="txtBlackBold">วันที่พิจารณา</td>
                <td height="20" align="left" class="txtPinkBold"><?php echo $model->paperDetailAccept->create_at; ?></td>
                <td height="20" align="left" class="txtBlackBold">ผู้พิจารณา</td>
                <td height="20" align="left" class="txtPinkBold"><?php echo $model->paperDetailAccept->member->name; ?></td>
            </tr>
            <?php
            $i = 1;
            while ($r2 = mysql_fetch_array($result2)) {
                $total_unit = $r2['num_order'] * $r2['price_unit'];
                $total = $total + $total_unit;
                ?>
                <?php
                $i++;
            } //end while  
            ?>
            <tr>
                <td height="20" colspan="2" align="center">&nbsp;</td>
                <td height="20" align="left">&nbsp;</td>
                <td height="20" colspan="2" align="left">&nbsp;</td>
            </tr>
        </table>
        <?php
    }
    if ($model->status == 3 && $model->paperDetail != null) {
        ?>
        <table width="600" border="0" cellspacing="0" cellpadding="0" style="border-top:1px dotted #CCCCCC;">
            <tr>
                <td width="16" height="20" align="left" class="txtBlackBold" style="border-bottom:1px dotted #CCCCCC;">&nbsp;</td>
                <td width="118" align="left" class="txtBlackBold" style="border-bottom:1px dotted #CCCCCC;"><span class="txtBlackBold" style="border-bottom:1px dotted #CCCCCC;">สถานะ</span></td>
                <td width="161" height="20" align="left" class="txtRedSmall" style="border-bottom:1px dotted #CCCCCC;"><?php echo Status::$paper[$model->status]; ?></td>
                <td width="76" height="20" align="left" class="txtBlackBold" style="border-bottom:1px dotted #CCCCCC;">เหตุผล</td>
                <td width="229" align="left" class="txtRedSmall" style="border-bottom:1px dotted #CCCCCC;"><?php echo $model->paperDetail->remark; ?></td>
            </tr>
            <tr>
                <td height="10" align="center">&nbsp;</td>
                <td height="20" rowspan="2" align="left" class="txtBlackBold">วันที่พิจารณา</td>
                <td height="20" rowspan="2" align="left" class="txtRedSmall"><?php echo Tools::DateTimeToShow($model->paperDetail->create_at, '/', true); ?></td>
                <td height="20" rowspan="2" align="left" class="txtBlackBold">ผู้พิจารณา</td>
                <td height="20" rowspan="2" align="left" class="txtRedSmall"><?php echo $model->paperDetail->member->name; ?></td>
            </tr>
            <tr>
                <td height="10" align="center">&nbsp;</td>
            </tr>
        </table>
        <?php
    }
}
?>
