<div id="wrap">
    <div class="container">

        <!-- #header -->
        <div id="header" class="sixteen columns clearfix">
            <div class="inner">

                <?php if ($logo): ?>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                  </a>
                <?php endif; ?>

                <?php if ($site_name || $site_slogan): ?>
                <div id="name-and-slogan"<?php if ($hide_site_name && $hide_site_slogan) { print ' class="element-invisible"'; } ?>>

                    <?php if ($site_name): ?>
                    <div id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
                    </div>
                    <?php endif; ?>

                    <?php if ($site_slogan): ?>
                    <div id="site-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
                    <?php print $site_slogan; ?>
                    </div>
                    <?php endif; ?>

                </div>
                <?php endif; ?>
            </div>
        </div><!-- /#header -->

        <!-- #navigation -->
        <div id="navigation" class="sixteen columns clearfix">

            <div class="menu-header">
            <?php if ($page['header']) : ?>
                <?php print drupal_render($page['header']); ?>
                <?php else : ?>
                <?php
				if (module_exists('i18n_menu')) {
				$main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
				} else {
				$main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
				} ?>
				<div class="content">
				<?php print drupal_render($main_menu_tree); ?>
                </div>
            <?php endif; ?>
            </div>

        </div><!-- /#navigation -->

        <?php if ($page['sidebar_first']) { ?>
        <div id="content" class="eleven columns">
        <?php } else { ?>
        <div id="content" class="sixteen columns clearfix">
        <?php } ?>

            <?php if ($messages): ?>
                <div id="messages">
                  <?php print $messages; ?>
                </div><!-- /#messages -->
            <?php endif; ?>

            <?php if ($breadcrumb): ?>
                <div id="breadcrumb"><?php print $breadcrumb; ?></div>
            <?php endif; ?>

            <div id="main">

                <?php if ($page['highlighted']): ?><div id="highlighted" class="clearfix"><?php print render($page['highlighted']); ?></div><?php endif; ?>

                <?php print render($title_prefix); ?>

                <?php if ($title): ?>
                <h1 class="title" id="page-title">
                  <?php print $title; ?>
                </h1>
                <?php endif; ?>

                <?php print render($title_suffix); ?>

                <?php if ($tabs): ?>
                <div class="tabs">
                  <?php print render($tabs); ?>
                </div>
                <?php endif; ?>

                <?php print render($page['help']); ?>

                <?php if ($action_links): ?>
                <ul class="action-links">
                  <?php print render($action_links); ?>
                </ul>
                <?php endif; ?>

                <?php print render($page['content']); ?>

            </div>

        </div><!-- /#content -->

        <?php if ($page['sidebar_first']): ?>
        <!-- #sidebar-first -->
        <div id="sidebar" class="five columns">
            <?php print render($page['sidebar_first']); ?>
        </div><!-- /#sidebar-first -->
        <?php endif; ?>

        <div class="clear"></div>

        <?php if ($page['featured_left'] || $page['featured_right']): ?>
        <!-- #featured -->
        <div id="featured" class="sixteen columns clearfix">

            <?php if ($page['featured_left'] && $page['featured_right']) { ?>
            <div class="one_half">
            <?php print render($page['featured_left']); ?>
            </div>

            <div class="one_half last">
            <?php print render($page['featured_right']); ?>
            </div>
            <?php } else { ?>

            <?php print render($page['featured_left']); ?>
            <?php print render($page['featured_right']); ?>

            <?php } ?>

        </div><!-- /#featured -->
        <?php endif; ?>

        <div class="clear"></div>

        <div id="footer" class="sixteen columns clearfix">

            <div class="one_third">
            <?php if ($page['footer_first']): ?><?php print render($page['footer_first']); ?><?php endif; ?>
            </div>

            <div class="one_third">
            <?php if ($page['footer_second']): ?><?php print render($page['footer_second']); ?><?php endif; ?>
            </div>

            <div class="one_third last">
            <?php if ($page['footer_third']): ?><?php print render($page['footer_third']); ?><?php endif; ?>
            </div>

            <div class="clear"></div>

            <?php if ($page['footer']): print render($page['footer']); endif; ?>

            <div class="clear"></div>

            <div id="credits">
			      &copy;<?php print(date('Y') . ' ');?>
            <?php print '<img src="' . $logo . '" alt="" class="footer-logo" style="width:24px;"/>&nbsp;&nbsp;Eureka Metal & Glass Services&nbsp;&nbsp;' . $feed_icons;?><br/>
            Website built and maintained by <a href="http://thecraftycanvas.com/" target="_blank">The Crafty Canvas</a>.
            </div>

        </div>
    <div class="container-screen"></div>
    </div><!--/.container-->
</div> <!-- /#wrap -->