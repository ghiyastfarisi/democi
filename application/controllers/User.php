<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public $direct_datatables_css_include = array(
		"/template/upbound/plugins/datatables/jquery.dataTables.min.css",
		"/template/upbound/plugins/datatables/buttons.bootstrap.min.css",
		"/template/upbound/plugins/datatables/fixedHeader.bootstrap.min.css",
		"/template/upbound/plugins/datatables/responsive.bootstrap.min.css",
		"/template/upbound/plugins/datatables/dataTables.bootstrap.min.css",
		"/template/upbound/plugins/datatables/scroller.bootstrap.min.css"
	);

	public $direct_datatables_js_include = array(
		"/template/upbound/plugins/datatables/jquery.dataTables.min.js",
		"/template/upbound/plugins/datatables/dataTables.bootstrap.js",
		"/template/upbound/plugins/datatables/dataTables.buttons.min.js",
		"/template/upbound/plugins/datatables/buttons.bootstrap.min.js",
		"/template/upbound/plugins/datatables/jszip.min.js",
		"/template/upbound/plugins/datatables/pdfmake.min.js",
		"/template/upbound/plugins/datatables/vfs_fonts.js",
		"/template/upbound/plugins/datatables/buttons.html5.min.js",
		"/template/upbound/plugins/datatables/buttons.print.min.js",
		"/template/upbound/plugins/datatables/dataTables.fixedHeader.min.js",
		"/template/upbound/plugins/datatables/dataTables.keyTable.min.js",
		"/template/upbound/plugins/datatables/dataTables.responsive.min.js",
		"/template/upbound/plugins/datatables/responsive.bootstrap.min.js",
		"/template/upbound/plugins/datatables/dataTables.scroller.min.js",
		"/template/upbound/pages/datatables.init.js"
	);

	public function index() {
		$data['include_js'] = array(
			'@/pages/user-list.js'
		);
		$data['include_js'] = array_merge($this->direct_datatables_js_include, $data['include_js']);

		$data['include_css'] = array();
		$data['include_css'] = array_merge($this->direct_datatables_css_include, $data['include_css']);

		$data['builder'] 	= 'base';
		$data['page'] 		= 'user/list';
		$this->load->view('index', $data);
	}

	public function api($method = null) {
		if ($method===null){
			show_404();
		}
		$userData = array(
			array(
				"id" 		=> 1,
				"username" 	=> "superadmin",
				"email"		=> "superadmin@webdomain.com"
			),
			array(
				"id" 		=> 2,
				"username" 	=> "usersatu",
				"email"		=> "usersatu@gmail.com"
			),
			array(
				"id" 		=> 3,
				"username" 	=> "userdua",
				"email"		=> "userdua@gmail.com"
			),
			array(
				"id" 		=> 4,
				"username" 	=> "usertiga",
				"email"		=> "usertiga@gmail.com"
			),
			array(
				"id" 		=> 5,
				"username" 	=> "mamboleo",
				"email"		=> "mamboleo@gmail.com"
			)
		);
		$page = 1;
		$limit = 5;
		$get = $this->input->get();
		if (isset($get['page'])) {
			$page = ($get['page'] > 0) ? $get['page'] : $page;
		}
		if (isset($get['limit'])) {
			$limit = ($get['limit'] > 0) ? $get['limit'] : $limit;
		}
		$filteredData = array_slice($userData, (($page - 1) * $limit), $limit);
		$resp = array(
			"header" => array(
				"error" 		=> "",
				"status_code" 	=> "",
				"response_time" => $this->benchmark->elapsed_time(),
				"total_data" 	=> count($filteredData)
			),
			"attribute" => array(
				"page" =>  intval($page),
				"limit" => intval($limit)
			),
			"data" => array(
				"user" => $filteredData
			)
		);
		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(
				json_encode(
					$resp
				)
			);
	}

	public function get($id = null) {
		if (!$this->_validateInputId($id)) {
			show_404();
		}
		echo 'user detail '.$id;
	}

	public function _validateInputId($id) {
		if ($id == null) {
			return false;
		}
		if (!is_numeric($id)) {
			return false;
		}
		if ($id < 1) {
			return false;
		}
		return true;
	}

}
