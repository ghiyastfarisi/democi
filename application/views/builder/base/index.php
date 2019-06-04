<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta content="Democi" name="description" />
	<meta content="Moeghifar" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<link rel="icon" href="/asset/static/gf-favicon.png">

	<title>Democi - moeghifar</title>
	<?php
		$base_css = array(
			// '@/builder/base.css',
			'@/upbound.css'
		);
		$data['include_css'] = (isset($include_css)) ? array_merge($base_css, $include_css) : $base_css;
		$this->load->view('builder/css', $data);
	?>
</head>
<body>
<div id="main-container">
	<?php
		if(!isset($page)) {
			show_404();
		}
		$pageTemplate = 'pages/'.$page;
		$this->load->view($pageTemplate);
	?>
</div>
<?php
	$base_js = array(
		'@/lib/main.js',
		'@/builder/base.js',
		'@/upbound.js'
	);
	$data['include_js'] = (isset($include_js)) ? array_merge($base_js, $include_js) : $base_js;
	$this->load->view('builder/js',  $data);
?>
</body>
</html>
