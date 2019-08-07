<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sunrisesample
 */

?>
<!DOCTYPE html>
<head>
	<?php
	// This function is in wp-content/themes/sunrise/functions.php'
	// This allows a page to add a header class before including the header in the page
	// This function is in wp-content/themes/sunrise/functions.phpsite-headee
	// Because they're easier to edit in one place
	$header_links = header_links();
	?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<?php wp_head(); //get wordpress scripts - required function
	include 'includes/head-elements.php';
	include 'includes/google-tag-manager.php'; ?>
</head>
<body class="lendio-standards proxima-soft" data-ng-app="wp-app">

	<div class="site-header-container-fixed">
		<div class="container nav-container">
			<div class="site-header">
				<a class="site-logo" href="/"><img src="wordpress/wp-content/themes/sunrisesample/images/logos/logo-sunrise.svg"></a>
				<div class="site-menu-container pt-1" >
					<div class="site-menu">
						<ul class="site-menu-list">
							<?php foreach ($header_links as $link): ?>
								<li class="site-menu-link <?php if ($link['is_submenu_link'] === true) echo 'site-menu-home-link'; ?>">
									<a href="<?=$link['href']?>" class="<?php if (!empty($link['submenu'])) echo 'parent-link'; ?>">
										<?=$link['title']?>
										<?php if (!empty($link['submenu'])): ?>
											<div class="site-submenu-caret"></div>
										<?php endif; ?>
									</a>
									<?php if ( ! empty($link['submenu'])): ?>
										<div class="site-submenu">
											<h3>
												<a href="" class="site-submenu-header"><?=$link['title']?></a></h3>
											<ul class="site-submenu-list">
												<?php foreach ($link['submenu'] as $title => $href): ?>
													<li class="site-submenu-link">
														<a href="<?=$href?>"><?=$title?></a>
													</li>
												<?php endforeach; ?>
												<?php if(is_array($link['subsubmenus'])): ?>
													<?php foreach ($link['subsubmenus'] as $subsubmenu): ?>
														<li class="site-submenu-link site-subsubmenu">
															<h4><?=$subsubmenu['title']?></h4>
														</li>
														<?php foreach ($subsubmenu['links'] as $title => $href): ?>
															<li class="site-submenu-link">
																<a href="<?=$href?>"><?=$title?></a>
															</li>
														<?php endforeach; ?>
													<?php endforeach; ?>
												<?php endif; ?>
											</ul>
											<div class="submenu-padding"></div>
											<div class="submenu-pointer"></div>
										</div>
									<?php endif; ?>
								</li>

							<?php endforeach; ?>
						</ul>
						<div class="cta-container">
							<a href="https://my.<?=$_SERVER['HTTP_HOST'] ?>/signup"><button class="primary-button">Sign Up For Free</button></a>
						</div>
					</div>
					<a href="#" class="site-menu-close">
					</a>
				</div>
				<a href="#" class="site-menu-toggle"></a>
				<a class="site-header-sign-in mt-1" href="https://my.sunriseapp.com/login">Sign In</a>
				<a href="https://my.<?=$_SERVER['HTTP_HOST'] ?>/signup" class="site-header-start-btn primary-button mt-1">Sign Up For Free</a>
				<div class="clear"></div>
			</div>
			<div class="light-logo-preloader"></div>
		</div>
	</div>

	