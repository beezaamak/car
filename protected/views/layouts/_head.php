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
        <li class="act"><a href="<?php echo Yii::app()->createUrl('/site/index'); ?>"><strong>หน้าหลัก</strong></a></li>
        <li><a href="<?php echo Yii::app()->createUrl('#'); ?>">ตารางการเดินรถ</a></li>
        <li> <a href="#"><em>บริการ</em></a>
            <ul>
                <li><i><a href="<?php echo Yii::app()->createUrl('/site/howto'); ?>">วิธีการขออนุญาตใช้รถ</a></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('carList'); ?>">ข้อมูลรถยนต์ส่วนกลาง</a></li>
                <li><a href="<?php echo Yii::app()->createUrl('/personnelList'); ?>">ข้อมูลพนักงานขับรถ</a></li>
            </ul>
        </li>
        <li><a href="<?php echo Yii::app()->createUrl('/newsList'); ?>">ข่าวประชาสัมพันธ์</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('/site/about'); ?>">เกี่ยวกับเรา</a></li>
        <li class="last"><a href="<?php echo Yii::app()->createUrl('/site/logout'); ?>"><b>ออกจากระบบ</b></a></li>
    </ul>
</nav>
<div id="faded">
    <ul>
        <li> <img src="images/gallery-1.jpg" alt="" /> <strong> <b>1 / 4</b> </strong>
            <div> <em>หน่วยยาน</em>
                <p>หน่วยยานพาหนะ งานอาคารสถานที่และยานพาหนะ กองกลาง สำนักงานอธิการบดี มหาวิทยาลัยราชภัฏสกลนคร </p>
                <i><a href="about.html">เพิ่มเติม</a></i> </div>
        </li>
        <li> <img src="images/gallery-2.jpg" alt="" /> <strong> <b>2 / 4</b> </strong>
            <div> <em>ปรัชญา</em>
                <p>บริการรวดเร็ว ฉับไว ปลอดภัย ทันต่อเวลา</p>
                <i><a href="about.html">เพิ่มเติม</a></i> </div>
        </li>
        <li> <img src="images/gallery-3.jpg" alt="" /> <strong> <b>3 / 4</b> </strong>
            <div> <em>วิสัยทัศน์ </em>
                <p>หน่วยยานพาหนะเป็นหน่วยงานที่ให้บริการทางรถยนต์ ด้วยความพร้อมด้านยานพาหนะและพนักงานขับรถ รวมไปถึงความสะดวกสบาย และความพึงพอใจในการให้บริการ</p>
                <i><a href="about.html">เพิ่มเติม</a></i> </div>
        </li>
        <li> <img src="images/gallery-4.jpg" alt="" /> <strong> <b>4 / 4</b> </strong>
            <div> <em>พันธกิจ </em>
                <p> บริหารจัดการระบบให้บริการรถยนต์แก่บุคลากรของมหาวิทยาลัย 
                    นำเทคโนโลยีในด้านการใช้รถยนต์มาปรับใช้ในการบริการ 
                    พัฒนาทักษะความรู้ ในการใช้รถยนต์แก่พนักงานขับรถอยู่เสมอ 
                     ตรวจสอบและดูแลสภาพรถยนต์เพื่อให้เกิดความปลอดภัยแก่ผู้ใช้บริการ 
                    คำนึงถึงการใช้พลังงานและทรัพยากรร่วมอย่างมีประสิทธิภาพ </p>
                <i><a href="about.html">เพิ่มเติม</a></i> </div>
        </li>
    </ul>
    <a href="#" class="prev">prev</a> <a href="#" class="next">next</a> 
</div>