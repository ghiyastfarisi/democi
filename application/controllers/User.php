<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index() {
		$data['include_js'] = array(
			'@/pages/user-list.js'
		);
		$data['builder'] 	= 'base';
		$data['page'] 		= 'user/list';
		$this->load->view('index', $data);
	}

	public function api($method = null) {
		if ($method===null){
			show_404();
		}
		$resp = array(
			"header" => array(
				"error" 		=> "",
				"status_code" 	=> "",
				"time_elapsed" 	=> ""
			),
			"data" => json_decode("{}")
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
