<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Democi - moeghifar</title>
	<?php
		$this->load->view('builder/css');
	?>
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
<script src="<?php echo base_url('bundle/dist/main.js') ?>"></script>
<?php
	$this->load->view('builder/js');
?>
</body>
</html>
