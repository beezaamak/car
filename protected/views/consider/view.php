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
<?php
if ($model->status == 1) {
    ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[id^=ConditionAccept_condition_]').change(function() {
    //            if($('[id^=ConditionAccept_condition_]').val() == 0){
                if ($('#ConditionAccept_condition_0').is(':checked')) {
                    $('#no_accept').hide();
                    $('#accept').show();
                }
                if ($('#ConditionAccept_condition_1').is(':checked')) {
                    $('#no_accept').show();
                    $('#accept').hide();
                }
    //            }
            });
        });
    </script>

    <div class="form" style='border: 1px solid #555; border-radius: 5px; padding-left: 10px; padding-right: 10px;'>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'accept-form',
            'enableAjaxValidation' => false,
        ));
        ?>
        <div class="row">
            <?php
            echo $form->labelEx($condition, 'condition');
            echo $form->radioButtonList($condition, 'condition', array(0 => 'อนุมัติ', 1 => 'ไม่อนุมัติ'), array('template' => '{input} <div style="display: inline-block;">{label}</div>'));
            echo $form->error($condition, 'condition');
            ?>
        </div>
        <div class="row" id="no_accept" style="display: none;">
            <?php
            echo $form->labelEx($noAccept, 'remark');
            echo $form->textField($noAccept, 'remark', array('size' => 80,));
            echo $form->error($noAccept, 'remark');
            ?>
        </div>
        <div class="row" id="accept" >
            <?php
            echo $form->labelEx($accept, 'car_id');
            echo $form->dropDownList($accept, 'car_id', Lists::car(), array('empty' => $this->labelController['messageSelect']));
            echo $form->error($accept, 'car_id');
            ?>
        </div>
        <?php if ($model->status == 1): ?>
            <div class="row buttons">
                <?php
//        echo CHtml::button('อนุมัติ', array('onClick' => 'if(confirm("คุณต้องการแจ้งการอนุมัติหรือไม่?")){window.location="' . CHtml::normalizeUrl(array('accept', 'id' => $model->paper_approval_id)) . '"}'));
//        echo CHtml::button('ไม่อนุมัติ', array('onClick' => 'if(confirm("คุณต้องการแจ้งการไม่อนุมัติหรือไม่?")){window.location="' . CHtml::normalizeUrl(array('notAccept', 'id' => $model->paper_approval_id)) . '"}'));
                ?>
                <!--<button type="submit" formaction="<?php // echo CHtml::normalizeUrl(array('test', 'id' => 1));                               ?>" onclick="return confirm('test')">-->
                <!--อนุมัติ-->
                <!--</button>-->
                <?php
                echo CHtml::button('ยืนยัน', array('onClick' => CHtml::ajax(array(
                        'dataType' => 'json',
                        'type' => 'post',
                        'url' => CHtml::normalizeUrl(array('view', 'id' => $model->paper_approval_id)),
                        'data' => 'js:$("#accept-form").serialize()',
                        'beforeSend' => 'function(){if(confirm("คุณต้องการดำเนินการต่อหรือไม่?"))return true; else return false;}',
                        'success' => 'function(data) {
                        if(data.status=="success"){
                            alert(data.message);
                            window.location="' . CHtml::normalizeUrl(array('index')) . '";
                        }
                         else{
                        $.each(data, function(key, val) {
                            alert(val);
                        });
                        }       
                    }'
                ))));
                ?>
            </div>
        <?php endif; ?>
    </div>

    <?php $this->endWidget(); ?>

    <?php
}
?>