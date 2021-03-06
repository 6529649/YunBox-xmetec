<!-- kadima Callout Section -->
<?php $wl_theme_options = kadima_get_options(); ?>
	<div style="background-color: #333;">
			
			<div class="col-md-12" style="background-color: #454449;padding-top: 18px;padding-bottom: 10px;border-bottom: 10px solid #3399fe;">
			    <div class="copyright-right " data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; ">
					<div class="container">
						<div class="col-md-8" style="float:left;padding:0;">
							<p class="kadima_footer_copyright_info wl_rtl" >
							<?php if($wl_theme_options['footer_customizations']) { echo esc_attr($wl_theme_options['footer_customizations']); }
							if($wl_theme_options['info_copyright']) { echo "|" .esc_attr($wl_theme_options['info_copyright']); } ?>
						</div>
						<div class="col-md-4" style="float:right;padding:0;">
							<ul >
								<?php if($wl_theme_options['fb_link']!='') { ?>
									 <li class="twitter" title="Facebook"><a class="twitter" href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"></a></li>
								<?php } if($wl_theme_options['twitter_link']!='') { ?>
								<li class="twitter facebook" title="Twitter"><a class="twitter facebook" href="<?php echo esc_url($wl_theme_options['twitter_link']) ; ?>"></a></li>
								<?php } if($wl_theme_options['linkedin_link']!='') { ?>
								<li class="twitter chrome" title="Linkedin"><a class="twitter chrome" href="<?php echo esc_url($wl_theme_options['linkedin_link']) ; ?>"></a></li>
								<?php } if($wl_theme_options['youtube_link']!='') { ?>
								<li class="twitter pinterest" title="Youtube"><a class="twitter pinterest" href="<?php echo esc_url($wl_theme_options['youtube_link']) ; ?>"></a></li>
												<?php } if($wl_theme_options['gplus']!='') { ?>
								<li class="twitter linkedin" title="gplus"><a class="twitter linkedin" href="<?php echo esc_url($wl_theme_options['gplus']) ; ?>"></a></li>
												<?php } if($wl_theme_options['instagram']!='') { ?>
								<li class="instagram" title="instagram"><a href="<?php echo esc_url($wl_theme_options['instagram']) ; ?>"></a></li>
												<?php } ?>
							</ul>
						</div>
					</div>
			    </div>
			    <div class="clearfix"> </div>
			    <!--a href="#home" id="toTop" class="scroll" style="display: none;"><span id="toTopHover"></span> <span id="toTopHover" style="opacity: 1;"> </span></a-->
			</div>
	</div>
</div>
<a href="#" title="Go Top" class="kadima_scrollup" style="display: inline;">
    <i class="fa fa-chevron-up"></i>
</a>
<?php if($wl_theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($wl_theme_options['custom_css']); } ?>
</style>
<?php wp_footer(); ?>
</body>
</html>
