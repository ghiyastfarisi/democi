<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	if(isset($include_css)) {
		if(is_array($include_css)) {
			foreach($include_css as $v) {
				echo '<link href="'.base_url($this->tools->_path_builder($v)).'" rel="stylesheet" type="text/css">';
			}
		} else {
			echo '<link href="'.base_url($this->tools->_path_builder($include_css)).'" rel="stylesheet" type="text/css">';
		}
	}
?>
