<?php
class Home extends CI_Controller {
    public function index()
    {
    	$this->load->model('Simple_Model');
    	$data['simpledata'] = Simple_Model::all();
        $this->load->view('Home', $data);
    }
}
