<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('file');
		$this->load->model('Generic_model' , 'generic');
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
		$this->load->view('home');
	}
	public function ContactUs(){
		$this->load->view('contact');
	}
	public function AddContactUsMsg(){
		$addData = array(
			'contactUserName' => $this->input->post('contactUserName'),
			'contactUserEmail' => $this->input->post('contactUserEmail'),
			'contactUserMsg' => $this->input->post('contactUserMsg'),
		);
		$this->generic->InsertData('contactusform' , $addData);
		$this->session->set_flashdata('mail-send-successfully', '1');
		redirect(base_url('contact-us'));
	}



	public function OurTeam(){
		$this->load->view('team');
	}
}