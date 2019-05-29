<?php
	if(isset($include_js)) {
		if(is_array($include_js)) {
			foreach($include_js as $v) {
				echo '<script src="'.base_url($v).'"></script>';
			}
		} else {
			echo '<script src="'.base_url($include_js).'"></script>';
		}
	}
?>
