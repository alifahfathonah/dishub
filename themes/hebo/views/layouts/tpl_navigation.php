<section id="navigation-main">  
<div class="navbar">
<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="nav-collapse">
                <?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
                    'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
			array('label'=>'HOME', 'url'=>array('/site/index'),'linkOptions'=>array("data-description"=>"")),
			array('label'=>'TRAYEK <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>""), 
                        'items'=>array(
                            array('label'=>'MPU AKDP', 'url'=>array('/mputrayek/admin')),
                            array('label'=>'BUS AKDP', 'url'=>array('/trayeklist01/admin')),
                            array('label'=>'BUS AKAP', 'url'=>array('/trayeklist02/admin')),
                        )),

                        array('label'=>'SETTING <span class="caret"></span>','visible'=>!Yii::app()->user->isGuest, 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>""),
                                    'items'=>array(
                                        array('label'=>'Create New Artikel','url'=>array('/post/create')),
                                        array('label'=>'List Artikel','url'=>array('/post/admin')),
                                        array('label'=>'Approve Comments (' . Comment::model()->pendingCommentCount.')','url'=>array('/comment/index')),
                                    ),
				),
                        array('label'=>'BERITA', 'url'=>array('/post/index'),'linkOptions'=>array("data-description"=>""),),
                        //array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'),'linkOptions'=>array("data-description"=>"what we are about"),),
                        array('label'=>'LOGIN', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"")),
                        array('label'=>'LOGOUT ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"")),
                    ),
                )); ?>
    	</div>
        <div class="pull-right clearfix hidden-phone">
            <div class="span3" id="pencarian">
                    <ul class="nav span3">
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <label>Info Angkutan</label>
                        </a>
                        <ul class="dropdown-menu row-fluid">
                            <div class="row-fluid">
                            <div class="form span12" >
                            <?php 
                            //model pencarian
                            $model2=new Trayekme('search');
                                            $model2->unsetAttributes();  // clear any default values
                                            if(isset($_GET['Trayekme']))
                                                    $model2->attributes=$_GET['Trayekme'];
                            $this->renderPartial('application.views.trayekme._search',array(
                                    'model'=>$model2,
                            )); ?>
                            </div><!-- search-form -->
                            </div>
                        </ul>
                        </li>
                    </ul>
            </div>
        </div>
        <div class="pull-left clearfix visible-phone">
            <div class="span3" id="pencarian">
                    <ul class="nav span3">
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <label>Info Angkutan</label>
                        </a>
                        <ul class="dropdown-menu row-fluid">
                            <div class="row-fluid">
                            <div class="form span12" >
                            <?php 
                            //model pencarian
                            $model2=new Trayekme('search');
                                            $model2->unsetAttributes();  // clear any default values
                                            if(isset($_GET['Trayekme']))
                                                    $model2->attributes=$_GET['Trayekme'];
                            $this->renderPartial('application.views.trayekme._search',array(
                                    'model'=>$model2,
                            )); ?>
                            </div><!-- search-form -->
                            </div>
                        </ul>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
</div>
</div>
</section><!-- /#navigation-main -->