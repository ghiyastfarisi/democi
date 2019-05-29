<?php
	if(isset($include_css)) {
		if(is_array($include_css)) {
			foreach($include_css as $v) {
				echo '<style src="'.base_url($v).'"></script>';
			}
		} else {
			echo '<script src="'.base_url($include_css).'"></script>';
		}
	}
?>
