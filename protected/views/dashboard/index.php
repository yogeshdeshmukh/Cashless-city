 <?php 
  
 if(Yii::app()->getModule('user')->isAdmin()){
     ?>
 
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />


        <div class="span3" style="">
            <div class="portlet" id="yw0">
                <div class="portlet-decoration">
                    <div class="portlet-title">Quick Links</div>
                </div>
                <div class="portlet-content">
                    <ul class="sidebar" id="yw1">
                        <li><?php echo CHtml::link('Users',Yii::app()->createurl('user/admin')) ?></li>
                        <li><?php echo CHtml::link('New Articles to Edit',Yii::app()->createurl('articles/posted')) ?></li>
                        
                    </ul></div>
            </div>
        </div>
 
<span style="margin:10px;"></span>
        <div class="span3">
            <div class="portlet" id="yw0">
                <div class="portlet-decoration">
                    <div class="portlet-title">Quick Stats</div>
                </div>
                <div class="portlet-content">
                    <ul class="sidebar" id="yw1">
                        <li> <?php echo CHtml::link('Total Users','#' ); ?><span style="margin:70px;"></span><b><?php Yii::app()->getModule('user')->totalUsers() ?></b></li>
                        
                    </ul></div>
            </div>
        </div>
          
<?php
}
  else{
      echo "<h1>OOPS!</h1>";
      echo '<h2>Error 403</h2>';
      echo '<br />';
      echo '<h3>You Are Not Authorized to View This Page</h3>';
  }

?>

    
    
