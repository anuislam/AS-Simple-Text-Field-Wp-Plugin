<?php

function anu_aweber_all_options(){
    add_settings_section('anu_aweber_section','This is your shortcode "[aweber_form]"', 'anu_aweber_section_display','anu_aweber_form');

    add_settings_field('as_login_url', 'Paste form code' , 'anu_aweber_form_display','anu_aweber_form', 'anu_aweber_section');

    register_setting('anu_aweber_section','anu_aweber_save');
}
add_action('admin_init', 'anu_aweber_all_options');

function anu_aweber_section_display(){
	return false;
}


function anu_aweber_form_display(){
	$anu_opt = (array)get_option('anu_aweber_save');
	$anu_opt = (empty($anu_opt['anu_aweber_code']) === false) ? $anu_opt['anu_aweber_code'] : null ;
	?>
<textarea name="anu_aweber_save[anu_aweber_code]" cols="80" rows="10"><?php echo $anu_opt; ?></textarea>
<p>Paste here your all aweber form code.</p>
	<?php
}