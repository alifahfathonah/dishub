<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo CHtml::encode(Yii::app()->name); ?></title>
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" type="text/css" media="screen, projection" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" type="text/css" media="screen, projection" />
        <!--[if IE 6]><link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.ie6.css" type="text/css" media="screen" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.ie7.css" type="text/css" media="screen" /><![endif]-->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/script.js"></script>
    </head><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
    <body>
        <div id="art-main">
        <div class="art-sheet">
            
            <div class="art-sheet-body">
                <div class="art-header">
                    <div class="art-header-center">
                        <div class="art-header-jpeg"></div>
                    </div>
                    <div class="art-logo">
                     <h1 id="name-text" class="art-logo-name"><a href="index.php">SISTEM INFORMASI</a></h1>
                     <h2 id="slogan-text" class="art-logo-text">JARINGAN ANGKUTAN JALAN JAWA TIMUR</h2>
                    </div>
                </div>
               <div id="mainMbmenu">
		<?php $this->widget('application.extensions.mbmenu.MbMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Trayek','visible'=>('true'),
					'items'=>array(
					array('label'=>'MPU', 'url'=>array('/trayeklist03/admin')),
					array('label'=>'AKDP', 'url'=>array('/trayeklist01/admin')),
					array('label'=>'AKAP', 'url'=>array('/trayeklist02/admin')),
						)
					),
				array('label'=>'Laporan', 'visible'=>(!Yii::app()->user->isGuest),
				   	'items'=>array( 
                    array('label'=>'Jumlah Bus AKDP per Trayek Per PO','url'=>array('/report001/rpt0001')), 
					array('label'=>'Jumlah Angkutan per PO','url'=>array('/report001/rpt0002')), 
					array('label'=>'Jumlah Bus per Trayek','url'=>array('/report001/rpt0003')),
                    array('label'=>'Jumlah Bus per Trayek berdasar asal/tujuan','url'=>array('/report001/rpt0004')), 						 
					array('label'=>'Rekap Jumlah Trayek, Armada & Kapasitas Angkut','url'=>array('//report001/rpt0005')), 
                        ), 
                    ),	
				array('label'=>'Master', 'visible'=>('true'),
					'items'=>array(
					array('label'=>'Balai', 'url'=>array('/balai/admin')),
					array('label'=>'Ruas Jalan', 'url'=>array('/jalanruas/admin')),
					array('label'=>'Daftar Jalan', 'url'=>array('/jalan/admin')),
					array('label'=>'Tarif Angkutan', 'url'=>array('/tarifangkutan/admin')),
					array('label'=>'Terminal', 'url'=>array('/terminal/admin')),
					array('label'=>'Trayek Angkutan Umum',
						    'items'=>array(
                                 array('label'=>'Daftar Grup Trayek AKDP','url'=>array('/gruptrayek01/admin')),
						         array('label'=>'Daftar Trayek AKDP','url'=>array('/trayek01/admin')),
                                 array('label'=>'Daftar Grup Trayek AKAP','url'=>array('/gruptrayek02/admin')), 
						         array('label'=>'Daftar Trayek AKAP','url'=>array('/trayek02/admin')),
							),	 
						  ),
						array('label'=>'Angkutan Umum',
						    'items'=>array(
                                 array('label'=>'Daftar PO','url'=>array('/po/admin')),
						         array('label'=>'Daftar Bus AKDP','url'=>array('/bus01/admin')),
                                 array('label'=>'Daftar Bus AKAP','url'=>array('/bus02/admin')),
							),	 
						), 
                       
				    )
				),
				array('label'=>'Statistik', 'url'=>array('/site/statistik')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
				<div class="art-content-layout">
				<?php echo $content;?>
				</div>
                <div class="cleared"></div>
            <div class="art-footer">
                    <div class="art-footer-t"></div>
                    <div class="art-footer-l"></div>
                    <div class="art-footer-b"></div>
                    <div class="art-footer-r"></div>
                    <div class="art-footer-body">
                         <a href="#" class="art-rss-tag-icon" title="RSS"></a>
                        <div class="art-footer-text">
                            <p><a href="#">Link1</a> | <a href="#">Link2</a> | <a href="#">Link3</a></p><p>Copyright &copy; 2012. All Rights Reserved.</p>
                        </div>
                		<div class="cleared"></div>
                    </div>
                </div>
        		<div class="cleared"></div>
            </div>
        </div>
        <div class="cleared"></div>
    </div>
    </body>
</html>