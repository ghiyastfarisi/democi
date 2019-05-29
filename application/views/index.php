<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!isset($builder)) {
	show_404();
}
$templateBuilder = 'builder/'.$builder.'/index';
$this->load->view($templateBuilder);
?>
