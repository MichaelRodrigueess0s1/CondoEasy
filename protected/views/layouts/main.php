<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

        <?php 
       //echo Yii::app()->bootstrap->registerAllCss();
        //echo Yii::app()->bootstrap->registerCoreScripts(); 
       ?>
        <script src="../../../js/additional-methods.min.js"></script>
        <script src="../../../js/bootstrap-switch.js"></script>
        <script src="../../../js/bootstrap-wysiwyg-custom.js"></script>
        <script src="../../../js/bootstrap.js"></script>
        <script src="../../../js/bootstrap-wysiwyg.js"></script>
        <script src="../../../js/bootstrap.min.js"></script>
        <script src="../../../js/calendar-custom.js"></script>
        <script src="../../../js/chartjs-custom.js"></script>
        <script src="../../../js/charts-flot.js"></script>
        <script src="../../../js/charts-other.js"></script>
        <script src="../../../js/charts-xcharts.js"></script>
        <script src="../../../js/charts.js"></script>
        <script src="../../../js/dynamic-table.js"></script>
        <script src="../../../js/easy-pie-chart.js"></script>
        <script src="../../../js/excanvas.min.js"></script>
        <script src="../../../js/form-component.js"></script>
        <script src="../../../js/form-validation-script.js"></script>
        <script src="../../../js/fullcalendar.js"></script>
        <script src="../../../js/fullcalendar.min.js"></script>
        <script src="../../../js/ga.js"></script>
        <script src="../../../js/gdp-data.js"></script>
        <script src="../../../js/gritter.js"></script>
        <script src="../../../js/html5shiv.js"></script>
        <script src="../../../js/index.js"></script>
        <script src="../../../js/jquery-1.8.3.min.js"></script>
        <script src="../../../js/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="../../../js/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../../../js/jquery-ui-1.10.4.min.js"></script>
        <script src="../../../js/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="../../../js/jquery.autosize.min.js"></script>
        <script src="../../../js/"></script>
        <script src="../../../js/"></script>
        <script src="../../../js/"></script>
        <script src="../../../js/"></script>
        <script src="../../../js/"></script>
        <script src="../../../js/"></script>
        <script src="../../../js/"></script>
        <script src="../../../js/"></script>
        
       
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>



	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div class="navbar navbar-in navbar-fixed-top">
            <div class="navbar-inverse">
                <div class="container">
                    <button type="button" class="btn-navbar" data-toogle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <a class="brand" href="<?php echo Yii::app() -> homeUrl; ?>">
                        <?php echo Yii::app() -> name; ?>
                    </a>
                    <div class="nav-collapse collapsable">
                    <?php $this->widget('zii.widgets.CMenu',array(
                            'items'=>array(
                                    array('label'=>'Home', 'url'=>array('/site/index')),
                                    array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                                    array('label'=>'Contact', 'url'=>array('/site/contact')),
                                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                            ),
                        'htmlOptions' => array('class' => 'nav navbar-nav'),
                    )); ?>
                        </div>
                </div>
            </div>
	</div>
        <!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?>
        <!-- breadcrumbs -->
	<?php endif?>
                
        <div class="container">
            <?php echo $content; ?>
        </div>
	<div class="clear"></div>

	<div id="footer">
		Todos direitos Reservados <?php echo date('Y'); ?> CondoEasy.<br/>
		<br/>
		
	</div><!-- footer -->



</body>
</html>
