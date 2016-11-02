<?php

	function anu_aweber_shortcode(){
		$anu_opt = (array)get_option('anu_aweber_save');
		$anu_opt = (empty($anu_opt['anu_aweber_code']) === false) ? $anu_opt['anu_aweber_code'] : null ;
		return $anu_opt;
	}
	add_shortcode('aweber_form', 'anu_aweber_shortcode');
