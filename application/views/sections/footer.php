<div class="row">
    <div class="offset-by-nine show-for-small two columns facebook text-center">
        <a href="https://www.facebook.com/amisun53" target="_blank"><?php echo img(array('src' => 'assets/images/facebook.png', 'width' => '250px', 'class' => '')); ?></a><br>
        <div class="fb-like" data-href="https://www.facebook.com/amisun53" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
    </div>
</div>
</div>
<div id="bottom_page">&copy; Amisun <span>| 6 allée du Clos Saint Martin - 53240 MONTFLOURS - (MAYENNE) - FRANCE | Maintenance - Nettoyage - Dépannage</span> - <?php echo anchor("mention", "Mentions légales") ?></div>
	<!-- Import all other JS files using HeadJS -->
    <script type="text/javascript">
	head.js("<?php echo base_url('assets'); ?>/javascripts/jquery.js")
		.js("<?php echo base_url('assets'); ?>/javascripts/foundation.min.js")
        .js("<?php echo base_url('assets'); ?>/javascripts/jquery.validate.min.js")
        .js("<?php echo base_url('assets'); ?>/javascripts/messages_fr.js")
		.js("<?php echo base_url('assets'); ?>/javascripts/app.js");
	</script>
	<!-- End Combine and Compress These JS Files -->

</body>
</html>
