<article class="col-1">
    <div class="box">
        <div class="corner-top-left">
            <div class="corner-top-right">
                <div class="border-top"></div>
            </div>
        </div>
        <div class="border-left">
            <div class="border-right">
                <div class="box-content">
                    <?php if (Yii::app()->user->isGuest) { ?>
                        <div class="inner">
                            <div class="wrapper">
                                <h2>ลงชื่อเข้าใช้</h2>
                            </div>
                        </div>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <?php $this->renderPartial('//layouts/_login_box'); ?>
                        </table>
                        <?php
                    } else {
                        ?>
                        <div class="inner">
                            <div class="wrapper">
                                <h2>ข้อมูล</h2>
                            </div>
                        </div>
                        <ul class="list-2">
                            <li><a href="#">สวัสดี : <?php echo Yii::app()->user->name; ?> </a></li>
                            <!--<li><a href="change_pass.html">เปลี่ยนรหัสผ่าน</a></li>-->
                            <?php if (!Yii::app()->user->isAdmin()) { ?>
                                <li><a href="<?php echo Yii::app()->createUrl('/paperApproval/create'); ?>">ขออนุญาตใช้รถยนส่วนกลาง</a></li>
                                <li><a href="<?php echo Yii::app()->createUrl('/paperApproval'); ?>">รายการขออนุญาตใช้รถยนส่วนกลาง</a></li>
                            <?php } else { ?>
                                <li><a href="<?php echo Yii::app()->createUrl('/admin'); ?>">หน้าผู้ดูแลระบบ</a></li>
                            <?php } ?>
                        </ul>
                        <?php
                    }
                    ?>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
        <div class="corner-bot-left">
            <div class="corner-bot-right">
                <div class="border-bot"></div>
            </div>
        </div>
        <div class="box">
            <div class="corner-top-left">
                <div class="corner-top-right">
                    <div class="border-top"></div>
                </div>
            </div>
            <div class="border-left">
                <div class="border-right">
                    <div class="box-content">
                        <div class="inner">
                            <div class="wrapper">
                                <h2><em>บริการ</em></h2>
                            </div>
                        </div>
                        <ul class="list-2">
                            <li></li>
                            <li><a href="<?php echo Yii::app()->createUrl('/carList'); ?>">ข้อมูลรถยนต์ส่วนกลาง</a></li>
                            <li><a href="<?php echo Yii::app()->createUrl('/personnelList'); ?>">ข้อมูลพนักงานขับรถ</a></li>
                            <li><a href="<?php echo Yii::app()->createUrl('/site/howto'); ?>">วิธีการขออนุญาตใช้รถยนต์ส่วนกลาง</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="corner-bot-left">
                <div class="corner-bot-right">
                    <div class="border-bot"></div>
                </div>
            </div>
        </div>
    </div>
</article>