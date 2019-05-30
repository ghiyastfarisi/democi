<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	if(isset($include_js)) {
		if(is_array($include_js)) {
			foreach($include_js as $v) {
				echo '<script src="'.base_url($this->tools->_path_builder($v)).'"></script>';
			}
		} else {
			echo '<script src="'.base_url($this->tools->_path_builder($include_js)).'"></script>';
		}
	}
?>