<?php if($this->layout=='column2'){}else{?>
<section id="bottom" class="">
    <div class="container bottom"> 
    	<div class="row-fluid ">            
            <div class="span4">
            	<h4>RECENT COMENTS</h4><hr>
            	<?php $this->widget('RecentComments', array(
                    'maxComments'=>Yii::app()->params['recentCommentCount'],
                    )); ?>
            </div>
            
            <div class="span4">
            	<h4>PENERBITAN IZIN AKDP</h4><hr>
            	<ul class="list-blog-roll">
                    <li><a href="<?php echo Yii::app()->baseUrl;?>/site/page?view=rule01">SK Izin Trayek Baru</a></li>
                    <li>
                    <a href="<?php echo Yii::app()->baseUrl;?>/site/page?view=rule02">Perpanjangan SK</a>
                    </li>
                    <li>
                    <a href="<?php echo Yii::app()->baseUrl;?>/site/page?view=rule03">Penambahan /pengurangan</a>
                    </li>
                    <li>
                    <a href="<?php echo Yii::app()->baseUrl;?>/site/page?view=rule04">Perubahan Trayek</a>
                    </li>
                    <li>
                    <a href="<?php echo Yii::app()->baseUrl;?>/site/page?view=rule05">Pengalihan Kepemilikan</a>
                    </li>
                    <li>
                    <a href="<?php echo Yii::app()->baseUrl;?>/site/page?view=rule06">Penggantian SKIT Rusak/Hilang</a>
                    </li>
              </ul>
            </div>
            
            <div class="span4">
            	<h4>KONTAK KAMI</h4><hr>
                <p>
                    DINAS PERHUBUNGAN DAN LALULINTAS ANGKUTAN JALAN<br>
                    PROVINSI JAWA TIMUR<br>
                    Jl. Jenderal Ahmad Yani No. 268<br>
                    Telpon (031) 8292276-8291530-8291633-8291380<br>
                    Fax. (031)8292433<br>
                    SURABAYA 60236
                </p>
            </div>
        </div>
        </div>
</section>
<section id="banner">
    <div class="container">
        <div class="list-banner">
            <ul id="slider-banner">
                <li><a href="http://jatimprov.go.id"><img src="<?php echo $baseUrl;?>/img/customers/jatimprov.png" width="240"/></a></li>
                <li><a href="http://www.dephub.go.id"><img src="<?php echo $baseUrl;?>/img/customers/dephub.png" width="240"></a></li>
                <li><a href="http://hubdat.web.id"><img src="<?php echo $baseUrl;?>/img/customers/dirjenhubdarat.png" width="240"></a></li>
                <li><a href="http://gis.dephub.go.id"><img src="<?php echo $baseUrl;?>/img/customers/gishubdarat.png" width="240"></a></li>
                <li><a href="http://118.97.61.233/pusdatin/index.php?option=com_content&task=view&id=69&Itemid=94"><img src="<?php echo $baseUrl;?>/img/customers/stsperhubungan.png" width="240"></a></li>
            </ul>
        </div>
            <div class="clear-fix"></div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function(){
         // Using custom configuration
        $('#slider-banner').carouFredSel({
            items               : 4,
        direction           : "left",
        responsive:true,
        scroll : {
            items           : 1,
            easing          : "elastic",
            duration        : 1000,                         
            pauseOnHover    : true
        },                   
            auto:{
                pauseOnHover:'resume',
                progress:{interval:40}
            }
        },{
            transition :true
        });
    });
</script> 
<?php }?>
<footer>
    <div class="footer">
        <div class="container">
            Copyright &copy; 2013. Designed by Dinas Perhubungan Provinsi Jawa Timur
        </div>
    </div>
</footer>
<script type="text/javascript">   
    jQuery('ul.nav li.dropdown').hover(function() {
              jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
            }, function() {
              jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
            });
    
    var addthis_config = {"data_track_addressbar":true};</script>
 <script src="<?php echo $baseUrl;?>/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52946a146ce1796f"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
  </body>
</html>