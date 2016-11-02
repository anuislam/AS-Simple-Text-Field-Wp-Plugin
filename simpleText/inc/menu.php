<?php
function anu_aweber_menu(){
	add_menu_page('Anu Aweber Options','Aweber Form', 'manage_options', 'Anu_options', 'anu_aweber_display');
}
add_action('admin_menu','anu_aweber_menu');

require_once( anu_aweber_path . '/inc/anu_aweber_options.php' ); 

function anu_aweber_display(){
?>

<div class="wrap" style="position:relative;overflow: hidden;">
<?php require_once( anu_aweber_path . '/inc/anu_ads.php' ); ?>
    <h2>Aweber Options</h2>
    	<?php settings_errors(); ?>
    <form action="options.php" method="POST">
	    <?php do_settings_sections('anu_aweber_form'); ?>
	    <?php settings_fields('anu_aweber_section'); ?>
	    <?php submit_button(); ?>
    </form>
</div>


<?php
}