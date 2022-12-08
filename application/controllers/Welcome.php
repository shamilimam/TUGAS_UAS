<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_data');
		
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function classes()
	{
		$this->load->view('classes');
	}
	public function pricing()
	{
		$this->load->view('pricing');
	}
	function formorder2()
	{
		$data=array(
		);

		$this->load->view('formorder2', $data);
	}
	function formorderout2()
	{
		$data=array(
		);

		$this->load->view('formorderout2', $data);
	}
	public function yoga()
	{
		$this->load->view('yoga');
	}
	public function contact()
	{
		$data=array(
			'id'=> $this->input->post('id'),
			'email'=> $this->input->post('email'),
			'nama'=> $this->input->post('nama'),
			'komentar'=> $this->input->post('komentar')
		);
		$this->db->insert('komentar', $data);
		$this->load->view('contact', $data);
	}
	public function login()
	{
		$this->load->view('login');
	}
	

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
}
