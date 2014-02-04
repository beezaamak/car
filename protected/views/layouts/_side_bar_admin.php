
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
                                <h2>จัดการ</h2>
                            </div>
                        </div>
                        <?php
                        $this->widget('zii.widgets.CMenu', array(
                            'items' => $this->menu,
                            'htmlOptions' => array('class' => 'list-2'),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="border-left">
            <div class="border-right">
                <div class="box-content">
                    <div class="inner">
                        <div class="wrapper">
                            <h2><em>เมนูหลัก</em></h2>
                        </div>
                    </div>
                    <ul class="list-2">
                        <li><a href="#">ข้อมูลสมาชิก</a></li>
                        <li><a href="#">ข้อมูลรถยนต์ส่วนกลาง</a></li>
                        <li><a href="#">ข้อมูลพนักงานขับรถ</a></li>
                        <li><a href="#">ข่าวประชาสัมพันธ์</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="border-left">
                <div class="border-right">
                    <div class="box-content">
                        <div class="inner">
                            <div class="wrapper">
                                <h2><em>ใช้บริการ</em></h2>
                            </div>
                        </div>
                        <ul class="list-2">
                            <li><a href="#">รับเรื่องการขอใช้บริการ</a></li>
                            <li><a href="#">ตรวจสอบและพิจารณา</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="border-left">
                <div class="border-right">
                    <div class="box-content">
                        <div class="inner">
                            <div class="wrapper">
                                <h2><em>รายงาน</em></h2>
                            </div>
                        </div>
                        <ul class="list-2">
                            <li><a href="#">ข้อมูลการขอใช้บริการที่อนุมัติ</a></li>
                            <li><a href="#">ข้อมูลการขอใช้บริการที่ไม่อนุมัติ</a></li>
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
        <p>&nbsp;</p>
    </div>
</article>