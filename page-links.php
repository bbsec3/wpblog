<?php
/**
template name: 友情链接模板
*/
$page_side_bar = kratos_option('page_side_bar');
$page_side_bar = (empty($page_side_bar)) ? 'right_side' : $page_side_bar;
get_header();
get_header('banner'); ?>
<div id="kratos-blog-post" style="background:<?php echo kratos_option('background_index_color'); ?>">
	<div class="container">
		<div class="row">
			<?php if( $page_side_bar == 'left_side' ){ ?>
				<aside id="kratos-widget-area" class="col-md-4 hidden-xs hidden-sm scrollspy">
	                <div id="sidebar">
	                    <?php dynamic_sidebar('sidebar_tool'); ?>
	                </div>
	            </aside>
			<?php } ?>
            <section id="main" class='<?php echo ($page_side_bar == 'single') ? 'col-md-12' : 'col-md-8'; ?>'>
			<?php while ( have_posts() ) : the_post(); ?>
                <article>
                    <div class="kratos-hentry kratos-post-inner clearfix">
<div class="panel panel-info">
	<div class="panel-heading">
	<h3 class="panel-title">说明</h3>
	</div>
	<div class="panel-body">
	<p>
   		本站友链不为提高排名和权重，单纯的为了交个朋友，欢迎大家提交友链<br>
		<pre>
邮件主题：友链申请
名称：XX的博客
头像：http(s)://xxxxx
网址：http(s)://xxxxx
		</pre><br>
<a href="mailto:admin@bbsec.xyz">请您添加本站友链后，发送点击 提交友链</a>
	</p>
	</div>
</div>

                        <div class="kratos-post-content-l">
                        <div class="linkpage">
                            <hr/>
                            <ul><?php
                            $bookmarks = get_bookmarks(array('orderby'=>'rand'));
                            if(!empty($bookmarks)){
                                foreach($bookmarks as $bookmark){
                                    $friendimg = $bookmark->link_image;
                                    if(empty($friendimg)){
                                        echo '<li><a href="'.$bookmark->link_url.'" target="_blank" rel="nofollow"><img src="'.get_template_directory().'/images/avatar.png"><h4>'.$bookmark->link_name.'</h4><p>'.$bookmark->link_description.'</p></a></li>';
                                    } else {
                                        echo '<li><a href="'.$bookmark->link_url.'" target="_blank" rel="nofollow"><img src="'.$bookmark->link_image.'"><h4>'.$bookmark->link_name.'</h4><p>'.$bookmark->link_description.'</p></a></li>';
                                    }
                                }
                            } ?>
                            </ul>
                            <hr/>
                        </div>
                        <?php the_content(); ?>
                        </div>
                    </div>
                    <?php comments_template(); ?>
                </article>
			<?php endwhile;?>
			</section>
			<?php if($page_side_bar == 'right_side'){ ?>
			<aside id="kratos-widget-area" class="col-md-4 hidden-xs hidden-sm scrollspy">
                <div id="sidebar">
                    <?php dynamic_sidebar('sidebar_tool'); ?>
                </div>
            </aside>
			<?php } ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
