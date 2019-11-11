<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<?php echo $this->renderPartial('//layouts/_header', array()); ?>

<?php echo $content ?>

<?php echo $this->renderPartial('//layouts/_footer', array()); ?>

<script type="text/javascript">
	$(function(){
		
		if( $(window).width() > 800 ){
			var xheight_cont =  $('section.about-location-sec-1 .row .col-md-45').height();
			$('section.about-location-sec-1 .row .box-konten-kiri').css('height', xheight_cont+'px');
		} 

	});
</script>
<?php $this->endContent(); ?>