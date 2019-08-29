<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kitchen_controller extends CI_Controller {


	public function index()
	{
		$this->load->view('pages/index');
	}
  public function about()
	{
		$this->load->view('pages/about');
	}
  public function gallery()
	{
		$this->load->view('pages/gallery');
	}
  public function contact()
  {
    $this->load->view('pages/contact');
  }
}
