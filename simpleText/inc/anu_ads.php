
<?php 
// icon size max 64px

$anu_icon = apply_filters('as_gl_ads_icon', array(
	array(
			'icon_url' => anu_aweber_url.'/img/anuicon/anufb.png',
			'site_url' => 'https://www.facebook.com/anuislam.shohag.3',
			'alt' => 'Anu islam shohag',
			'title' => 'Facebook'
		),
	
	array(
			'icon_url' => anu_aweber_url.'/img/anuicon/anutw.png',
			'site_url' => 'https://twitter.com/anuislamshohag',
			'alt' => 'Anu islam shohag',
			'title' => 'Twitter'
		),
	
	array(
			'icon_url' => anu_aweber_url.'/img/anuicon/anugoogle.png',
			'site_url' => 'https://plus.google.com/u/0/103298043413767707783',
			'alt' => 'Anu islam shohag',
			'title' => 'google plus'
		),
	
	array(
			'icon_url' => anu_aweber_url.'/img/anuicon/anupin.png',
			'site_url' => 'https://www.pinterest.com/anuislam/',
			'alt' => 'Anu islam shohag',
			'title' => 'Pinterest'
		),
	
	array(
			'icon_url' => anu_aweber_url.'/img/anuicon/anulink.png',
			'site_url' => 'https://bd.linkedin.com/in/anu-islam-shohag-b50775100',
			'alt' => 'Anu islam shohag',
			'title' => 'Linkedin'
		),
	
	array(
			'icon_url' => anu_aweber_url.'/img/anuicon/anuwp.png',
			'site_url' => 'https://profiles.wordpress.org/anuislam',
			'alt' => 'Anu islam shohag',
			'title' => 'Wordpress'
		),
	
	array(
			'icon_url' => anu_aweber_url.'/img/anuicon/anugit.png',
			'site_url' => 'https://github.com/anuislam',
			'alt' => 'Anu islam shohag',
			'title' => 'Github'
		),
	
	array(
			'icon_url' => anu_aweber_url.'/img/anuicon/anufiverr.png',
			'site_url' => 'https://www.fiverr.com/anuislam',
			'alt' => 'Anu islam shohag',
			'title' => 'Fiverr'
		),
	
	array(
			'icon_url' => anu_aweber_url.'/img/anuicon/anuupwork.png',
			'site_url' => 'http://www.upwork.com/o/profiles/users/_~0196e3e9ffe8d92fe4/',
			'alt' => 'Anu islam shohag',
			'title' => 'Upwork'
		)

)); ?>

<div class="anu_my_stutas_main as_gl_right">
	<div class="anu_stutas_inner">
	<span class="as_gl_toggle as_gl_close">Contact me</span>
		<header>
			<?php echo get_avatar( 'anuislams@gmail.com', 64); ?>
		</header>
		<ul>

<?php 

	if (empty($anu_icon) === false || isset($anu_icon) === true) {
		foreach ($anu_icon as $icon) {
?>



			<li>
				<a href="<?php echo $icon['site_url'];?>" title="<?php echo $icon['title'];?>" target="_blank" >
					<img src="<?php echo $icon['icon_url'];?>" alt="<?php echo $icon['alt'];?>">
				</a>
			</li>


<?php
		}
	}

 ?>



		</ul>

<div id="as_gl_skrril_donet">
	<span id="as_gl_donet_amount">
		<strong>My Email anuislams@gmail.com</strong>
	</span>
</div>

	</div>
</div>