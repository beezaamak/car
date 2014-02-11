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
        <li><a href="<?php echo Yii::app()->createUrl('/site/about'); ?>">เกี่ยวกับเรา</a></li>
        <li> <a href="<?php echo Yii::app()->createUrl('/admin'); ?>"><em>จัดการข้อมูล</em></a>
            <ul>
                <li><i><a href="#">ข้อมูลสมาชิก</a></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('/car'); ?>">ข้อมูลรถยนต์ส่วนกลาง</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('/personnel'); ?>">ข้อมูลพนักงานขับรถ</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('/position'); ?>">ข้อมูลตำแหน่ง</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('/brand'); ?>">ข้อมูลยี่ห้อ</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('/place'); ?>">ข้อมูลจุดนัดขึ้นรถ</a></li>
            </ul>
        </li>
        <li><a href="<?php echo Yii::app()->createUrl('/newsList'); ?>">ข่าวประชาสัมพันธ์</a></li>
        <li><a href="#">การติดต่อ</a></li>
        <li class="last"><a href="<?php echo Yii::app()->createUrl('/site/logout'); ?>"><b>ออกจากระบบ</b> </a></li>
    </ul>
</nav>