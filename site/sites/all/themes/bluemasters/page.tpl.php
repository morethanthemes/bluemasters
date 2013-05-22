<div id="page">

    <!--header-top-->
    <div id="header-top">
        <div id="header-top-inside" class="clearfix container_12">
        	
            <div class="grid_7">
                <!--header-top-inside-left-->
                <div id="header-top-inside-left"><?php print render($page['header']); ?></div>
                <!--EOF:header-top-inside-left-->
            </div>
            
            <div class="grid_2">
                <!--header-top-inside-left-feed-->
                <div id="header-top-inside-left-feed">
                    <div id="topSocial">
                    <ul>									
                        <li><a class="twitter" href="http://twitter.com/morethanthemes" title="Follow Us on Twitter!"></a></li>
                        <li><a class="facebook" href="http://www.facebook.com/pages/More-than-just-themes/194842423863081" title="Join Us on Facebook!"></a></li>
                        <li><a class="rss" title="RSS" href="#" title="Subcribe to Our RSS Feed"></a></li>
                    </ul>
                    </div>
                </div>
                <!--EOF:header-top-inside-left-feed-->
            </div>
            
            <div class="grid_3">
                <!--header-top-inside-left-right-->
                <div id="header-top-inside-right"><?php print render($page['search_area']);?></div> 
                <!--EOF:header-top-inside-left-right-->
            </div>
             
        </div>
    </div>
    <!--EOF:header-top-->

    <div id="wrapper">

        <!--header-->
        <div id="header" class="clearfix container_12">
        	
            <div class="grid_5">
                <!--logo-floater-->
                <div id="logo-floater"> 
        			<?php if ($logo): ?>
                    <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                    <?php endif; ?>
                    
                    <?php if ($site_name || $site_slogan): ?>
                    <div class="clearfix">
        				<?php if ($site_name): ?>
                        <span id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></span>
                        <?php endif; ?>
                        
                        <?php if ($site_slogan): ?>
                        <span id="slogan"><?php print $site_slogan; ?></span>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div> 
                <!--EOF:logo-floater-->
            </div>
            
            <div class="grid_7">
                <!--navigation-->
                <div id="navigation">
                    <?php if ($page['navigation']) :?>
                    <?php print drupal_render($page['navigation']); ?>
                    <?php else :
                    if (module_exists('i18n_menu')) {
                    $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
                    } else { $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); }
                    print drupal_render($main_menu_tree);
                    endif; ?>
                </div>
                <!--EOF:navigation-->
            </div>
           
        </div><!--EOF:header-->
        
        <div class="container_12">
            <div class="grid_12">
                <div id="main-area" class="clearfix">
                
                    <div id="main-area-inside" class="clearfix">
                        
                        <?php if ($page['sidebar_first']) { ?>
                        <div class="grid_8 alpha omega">
                        <?php } else { ?>
                        <div class="grid_12 alpha omega">    
                        <?php } ?>

                            <div id="main"  class="inside clearfix">
                                
                                <?php if ($page['highlighted']): ?><div id="highlighted" class="clearfix"><?php print render($page['highlighted']); ?></div><?php endif; ?>
                           
                    			<?php if ($messages): ?>
                                <div class="clearfix">
                    			<?php print $messages; ?>
                                </div>
                                <?php endif; ?>
                         
                                <?php if ($page['help']): ?>
                                <div id="help">
                                <?php print render($page['help']); ?>
                                </div>
                                <?php endif; ?>
                                
                                <?php if ($action_links): ?>
                                <ul class="action-links">
                    			<?php print render($action_links); ?>
                                </ul>
                    			<?php endif; ?>
                                
                                <?php print render($title_prefix); ?>
                                <?php if ($title): ?>
                                <h1 class="title"><?php print $title ?></h1>
                                <?php endif; ?>
                                <?php print render($title_suffix); ?>
                                
                                <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
                                
                                <?php print render($page['content']); ?>
                                
                                <?php if ($feed_icons): ?><?php print $feed_icons; ?><?php endif; ?>
                                
                            </div>
                            <!--main-->
                        </div>
                    
                		<?php if($page['sidebar_first']): ?>
                        <div class="grid_4 alpha omega">
                            <div id="right" class="clearfix">
                                
                                <div id="network" class="block">
                                    <h2>Network Connect</h2>  
                                    <div class="network">
                                        <a href="http://twitter.com/morethanthemes" class="twitter">Twitter</a>
                                        <a href="http://www.facebook.com/pages/More-than-just-themes/194842423863081" class="facebook">Facebook</a>
                                        <a href="http://www.flickr.com/photos/56103643@N07/" class="flickr">Flickr</a>
                                        <a href="#" class="in">In</a>
                                        <a href="#" class="tumblr">Tumblr</a>
                                        <a href="http://www.youtube.com/morethanthemes" class="youtube">Youtube</a>
                                    </div>
                                </div>
                                    
                                <?php print render($page['sidebar_first']); ?>
                            
                            </div>
                            <!--right-->
                        </div>
                        <?php endif; ?>
                        
                    </div>
                
                </div>
                <!--main-area-->
            </div>
        </div>
        
    </div><!-- /#wrapper-->

    <!--footer-->
    <div id="footer">
        <div id="footer-inside" class="clearfix container_12">
            
            <div class="grid_4">
            	<div id="footer-left">
                    <div class="grid_2 alpha">
                		<div id="footer-left-1">
                			<?php print render($page['footer_left_1']);?>
                		</div>
                    </div>
                    <div class="grid_2 omega">
                        <div id="footer-left-2">
                			<?php print render($page['footer_left_2']);?>
                		</div>
                    </div>
                </div>
            </div>
            
            <div class="grid_4">
                <div id="footer-center">
                	<?php print render($page['footer_center']);?>
                </div>
            </div>
            
            <div class="grid_4">
                <div id="footer-right">
                	<?php print render($page['footer_right']);?>
                </div>
            </div>
            
        </div>
    </div>
    <!--EOF:footer-->

    <!--footer-bottom-->
    <div id="footer-bottom">
        
        <div id="footer-bottom-inside" class="clearfix container_12">

            <div class="grid_5">
            	<div id="footer-bottom-inside-left">
            		<?php print render($page['footer']);?>
            	</div>
            </div>

            <div class="grid_7">
            	<div id="footer-bottom-inside-right">
        		<?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
            	<?php if ($page['footer_bottom']) :?>
                <?php print render($page['footer_bottom']); ?>
                <?php endif; ?>
                </div>
            </div>

            <div class="grid_12">
        	   <div class="credits-container" style="clear:both; padding-top:12px;">Ported to Drupal for the Open Source Community by <a href="http://www.drupalizing.com">Drupalizing</a>, a Project of <a href="http://www.morethanthemes.com">More than Themes</a></div>     
            </div>

        </div>

        <div class="container_12">

            <div class="grid_12">
                <div class="credits-container clearfix">
                    <a title="Brought To You By: www.SmashingMagazine.com" class="smashing" href="http://www.smashingmagazine.com" target="_blank">Brought to you By: www.SmashingMagazine.com</a>
                    <a title="Drupalizing" class="drupalizing" href="http://www.drupalizing.com" target="_blank">Drupalizing</a> 
                </div>  
            </div> 
        
        </div> 
            
    </div>
    <!--EOF:footer-bottom-->

</div><!--EOF:page-->