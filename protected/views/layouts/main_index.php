<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>

        <title><?php echo Yii::app()->name; ?></title>
        <meta charset="utf-8" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/css/reset.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/css/style.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/dropdown.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.faded.js"></script>
        <script type="text/javascript">
            $(function() {
                $("#faded").faded({
                    crossfade: true,
                    speed: 700,
                    autoplay: 5000,
                    autorestart: true,
                    autopagination: false
                });
            });
        </script>
        <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <script type="text/javascript">
            try {
                var pageTracker = _gat._getTracker("UA-7078796-1");
                pageTracker._trackPageview();
            } catch (err) {
            }
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/css/my-css.css" rel="stylesheet" type="text/css" />
    </head>
    <body id="page1">
        <div id="main-tail-top">
            <div id="main-tail-bot">
                <div id="main-tail-ver">
                    <div id="main-bg-top">
                        <div id="main-bg-bot">
                            <div id="main">
                                <!-- header -->
                                <header>
                                    <?php $this->renderPartial('//layouts/_head'); ?>
                                </header>
                                <!-- content -->
                                <section id="content">
                                    <div id="indent">
                                        <div class="wrapper-1">
                                            <?php $this->renderPartial('//layouts/_side_bar_main'); ?>
                                            <?php echo $content; ?>
                                            <div class="clear">
                                                <p>&nbsp;</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- footer -->
                                <footer>
                                    <div class="inner">
                                        <div class="wrapper">
                                            <ul>
                                                <li><a href="#"><span><span>ขึ้นบนสุด</span></span></a></li>
                                            </ul>
                                            <p>copyright &copy; 2011 <a href="#">ระบบบริหารจัดการสารสนเทศ หน่วยยานพาพหนะ มหาวิทยาลัยราชภัฏสกลนคร</a><strong><!-- {%FOOTER_LINK} -->
                                                </strong></p>
                                        </div>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
