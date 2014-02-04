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
                    <div class="inner">
                        <div class="wrapper">
                            <h2>ลงชื่อเข้าใช้</h2>
                        </div>
                    </div>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <script>
                            function chkLogin() {
                                var frm = document.frmLogin;
                                if (frm.user_login.value == "") {
                                    alert("กรุณากรอก ชื่อผู้ใช้");
                                    frm.user_login.focus();
                                    return false;
                                }
                                if (frm.user_pass.value == "") {
                                    alert("กรุณากรอก รหัสผ่าน");
                                    frm.user_pass.focus();
                                    return false;
                                }
                            }
                        </script>
                        <form action="check_login.php" method="post" name="frmLogin" id="frmLogin" onSubmit="return chkLogin()">
                            <tr>
                                <td width="26%" height="25" align="left" class="txtWhitenormal"><p>ชื่อผู้ใช้ :</p></td>
                                <td width="74%" height="25" align="left"><input name="user_login" type="text" class="textboxk2" id="user_login" size="15" maxlength="10" /></td>
                            </tr>
                            <tr>
                                <td height="25" align="left" class="txtWhitenormal"><p>รหัสผ่าน :</p></td>
                                <td height="25" align="left"><p>
                                        <input name="user_pass" type="password" class="textboxk2" id="user_pass" size="15" maxlength="10" />
                                    </p></td>
                            </tr>
                            <tr>
                                <td height="25" colspan="2" align="center"><input name="button" type="submit" class="buttonk3" id="button" value="ลงชื่อเข้าใช้" /></td>
                            </tr>
                        </form>
                    </table>
                    <p>&nbsp;</p>
                    <ul class="list-2">
                        <li><a href="member_detail.html">ข้อมูลส่วนตัว</a></li>
                        <li><a href="change_pass.html">เปลี่ยนรหัสผ่าน</a><a href="Add.html">ขออนุญาตใช้รถยนส่วนกลาง</a><a href="Add_list.html">รายการขออนุญาตใช้รถยนส่วนกลาง</a></li>
                        <li></li>
                        <li><a href="index.html">ออกจากระบบ</a></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
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
                            <li><a href="car.html">ข้อมูลรถยนต์ส่วนกลาง</a></li>
                            <li><a href="cardri.html">ข้อมูลพนักงานขับรถ</a></li>
                            <li></li>
                            <li></li>
                            <li><a href="how_to.html">วิธีการขออนุญาตใช้รถยนต์ส่วนกลาง</a></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
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
        <p>
            <embed src="images/demo.mp3?hidden=true&loop=true&autostart=true" width="32" height="32" hidden="true"></embed>
        </p>
    </div>
</article>