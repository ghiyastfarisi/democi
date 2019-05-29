<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Democi - moeghifar</title>
</head>
<body>
<div id="container">
	<?php
		if(!isset($page)) {
			show_404();
		}
		$pageTemplate = 'pages/'.$page;
		$this->load->view($pageTemplate);
	?>
</div>
<script src="<?php echo base_url('bundle/core.js') ?>"></script>
</body>
</html>
