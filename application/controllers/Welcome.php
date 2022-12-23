<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Welcome extends MY_Controller
{
	// function __construct()
	// {
	// 	parent::__construct();
	// 	// $this->load->model('M_data');
	// 	$this->load->helper('url');
	// 	$this->load->helper('download');
	// }

	public function index()
	{
		// $this->data['website'] = $this->db->get('tbl_website')->row();
		// $this->data['homeweb'] = $this->db->get('tbl_homeweb')->row();
		// $this->data['kepengurusan'] = $this->db->get('tbl_kepengurusan')->result();
		// $this->data['merchandise'] = $this->db->get('tbl_our_merchandise')->result();
		// $this->data['program'] = $this->db->get('tbl_program')->result();
		// $this->data['program_desk'] = $this->db->get_where('tbl_program', array('id' => 5))->row();
		// $this->data['visi_misi'] = $this->db->get('tbl_visi_misi')->result();
		// $this->data['gallery'] = $this->db->get('tbl_gallery')->result();

		$this->web = 'content/v_home';
		// $this->data['navigation']=$this->db->get_where('tbl_navigation');
		$this->layout();
	}
}