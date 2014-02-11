<h1><a href="index.html"><span>Graix</span></a></h1>
<form action="" id="search-form">
    <div class="wrapper">
        <input type="submit" value="" id="search-submit" />
        <input type="text" value="" />
    </div>
</form>
<ul id="navi">
    <li>โทร  0 4297 0249</li>
    <li></li>
    <li><a href="#">ค้นหา</a></li>
</ul>
<nav>
    <ul>
        <li><a href="<?php echo Yii::app()->createUrl('/site/index'); ?>"><strong>หน้าหลัก</strong></a></li>
        <li><a href="<?php echo Yii::app()->createUrl('#'); ?>">ตารางการเดินรถ</a></li>
        <li> <a href="#"><em>บริการ</em></a>
            <ul>
                <li><i><a href="<?php echo Yii::app()->createUrl('/site/howto'); ?>">วิธีการขออนุญาตใช้รถ</a></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('/carList'); ?>">ข้อมูลรถยนต์ส่วนกลาง</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('personnelList'); ?>">ข้อมูลพนักงานขับรถ</a></li>


            </ul>
        </li>
        <li><a href="<?php echo Yii::app()->createUrl('/newsList'); ?>">ข่าวประชาสัมพันธ์</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('/site/about'); ?>">เกี่ยวกับเรา</a></li>
        <li class="last"><a href="<?php echo Yii::app()->createUrl('/site/logout'); ?>"><b>ออกจากระบบ</b></a></li>
    </ul>
</nav>