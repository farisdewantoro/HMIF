<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->model('news_model');
		$this->load->library('pagination');
		$this->load->model('admin_model');
		$this->load->model('user_model');
		$this->load->helper('url_helper');
		$this->load->helper('text');
	}

	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	//
	// }




  public function view($halaman='content'){
      if(!file_exists(APPPATH."views/pages/".$halaman.'.php')){
        show_404();
      }
			$row=$this->admin_model->baris();

			$this->load->library('pagination');
			$config['total_rows'] = $row;
			$config['per_page'] = 8;
			$config2['per_page'] = 3;

			$start=$this->uri->segment(3);
			$this->pagination->initialize($config);
			$data3['events_left']=$this->admin_model->pagination_event_latest($config['per_page'],$start);
			$data2['events']=$this->admin_model->pagination_event($config2['per_page'],$start);
			$data = array_merge($data3, $data2);
			$this->load->view('templates/header');
      $this->load->view('pages/'.$halaman,$data);
      $this->load->view('templates/footer',$data2);
  }

public function gallery($gal){
	if(!file_exists(APPPATH."views/pages/gallery/".$gal.'.php')){
		show_404();
	}
	$row=$this->admin_model->baris();

	$this->load->library('pagination');
	$config['total_rows'] = $row;
	$config['per_page'] = 8;
	$config2['per_page'] = 3;

	$start=$this->uri->segment(3);
	$this->pagination->initialize($config);
	$data2['events']=$this->admin_model->pagination_event($config2['per_page'],$start);

	$this->load->view('templates/header');
	$this->load->view('pages/gallery/'.$gal);
	$this->load->view('templates/footer',$data2);
}


	public function allevent($slug = null)
	{

		$row=$this->admin_model->baris();

		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/HMIFFF/events';
		$config['total_rows'] = $row;
		$config['per_page'] = 8;
		$config2['per_page'] = 3;
		$config['full_tag_open'] = "<ul class='pagination'>";
	$config['full_tag_close'] = '</ul>';
	$config['num_tag_open'] = '<li>';
	$config['num_tag_close'] = '</li>';
	$config['cur_tag_open'] = '<li class="active"><a href="#">';
	$config['cur_tag_close'] = '</a></li>';
	$config['prev_tag_open'] = '<li>';
	$config['prev_tag_close'] = '</li>';
	$config['first_tag_open'] = '<li>';
	$config['first_tag_close'] = '</li>';
	$config['last_tag_open'] = '<li>';
	$config['last_tag_close'] = '</li>';
	$config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
	$config['prev_tag_open'] = '<li>';
	$config['prev_tag_close'] = '</li>';
	$config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
	$config['next_tag_open'] = '<li>';
	$config['next_tag_close'] = '</li>';

		$start=$this->uri->segment(2);
		$this->pagination->initialize($config);

		$data2['events']=$this->admin_model->pagination_event($config2['per_page'],$start);
		$data['events']=$this->admin_model->pagination_event($config['per_page'],$start);
		// $data['events']=$this->admin_model->get_news();
// $data['event_item']=$this->admin_model->get_news($slug);

			$this->load->view('templates/header');
			$this->load->view('pages/event',$data);
			$this->load->view('templates/footer',$data2);

	}

	public function search($title=null)
	{

		$title=$this->input->post('search');

		if(isset($title) and !empty($title)){
			$data['events']=$this->admin_model->search($title);

			$this->load->view('templates/header');
			$this->load->view('pages/event',$data);
			$this->load->view('templates/footer');
		}else{
			redirect('events');
		}

	}

	public function event($slug = NULL)
	{
		$row=$this->admin_model->baris();

		$this->load->library('pagination');
		$config['total_rows'] = $row;
		$config['per_page'] = 4;
		$config2['per_page'] = 3;

		$start=$this->uri->segment(3);
		$this->pagination->initialize($config);
		$data3['events_left']=$this->admin_model->pagination_event_latest($config['per_page'],$start);
		$data2['events']=$this->admin_model->pagination_event($config2['per_page'],$start);
		$data = array_merge($data3, $data2);
		$data['event_item']=$this->admin_model->get_news($slug);
		$this->load->view('templates/header');
		$this->load->view('pages/event_slug',$data);
		$this->load->view('templates/footer',$data2);

	}

public function anggota(){
	$row=$this->admin_model->baris_anggota();

	$this->load->library('pagination');
	$config['base_url'] = 'http://localhost/HMIFFF/anggotahmif';
	$config['total_rows'] = $row;
	$config['per_page'] = 8;
	$config2['per_page'] = 3;
	$config['full_tag_open'] = "<ul class='pagination'>";
	$config['full_tag_close'] = '</ul>';
	$config['num_tag_open'] = '<li>';
	$config['num_tag_close'] = '</li>';
	$config['cur_tag_open'] = '<li class="active"><a href="#">';
	$config['cur_tag_close'] = '</a></li>';
	$config['prev_tag_open'] = '<li>';
	$config['prev_tag_close'] = '</li>';
	$config['first_tag_open'] = '<li>';
	$config['first_tag_close'] = '</li>';
	$config['last_tag_open'] = '<li>';
	$config['last_tag_close'] = '</li>';
	$config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
	$config['prev_tag_open'] = '<li>';
	$config['prev_tag_close'] = '</li>';
	$config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
	$config['next_tag_open'] = '<li>';
	$config['next_tag_close'] = '</li>';
	$config['use_page_numbers'] = TRUE;

	$start=$this->uri->segment(2);
	$this->pagination->initialize($config);

	$data4['anggotahmif']=$this->admin_model->pagination_anggota($config['per_page'],$start);
	$data2['events']=$this->admin_model->pagination_event($config2['per_page'],$start);

	$this->load->view('templates/header');
	$this->load->view('pages/anggotahmif',$data4);
	$this->load->view('templates/footer',$data2);
}


				public function message(){
					$this->load->helper('form');

					$this->load->library('form_validation');
					$this->form_validation->set_error_delimiters('<div class="bg-danger">', '</div>');
				$this->form_validation->set_rules('nama','nama','htmlspecialchars|required|min_length[3]|max_length[50]');
				$this->form_validation->set_rules('email','email','htmlspecialchars|required|valid_email|min_length[5]|max_length[50]');
				$this->form_validation->set_rules('message','message','htmlspecialchars|required');
				$this->form_validation->set_rules('date','date','htmlspecialchars');
				$row=$this->admin_model->baris();
				$this->load->library('pagination');
				$config['total_rows'] = $row;
				$config2['per_page'] =3;

				$start=$this->uri->segment(3);
				$this->pagination->initialize($config);

				$data2['events']=$this->admin_model->pagination_event($config2['per_page'],$start);
				if ($this->form_validation->run()===FALSE) {

					$this->load->view('templates/header');
					$this->load->view('pages/contact');
					$this->load->view('templates/footer',$data2);

				}else{
					$this->admin_model->set_message();
					$backreload = $_SERVER["HTTP_REFERER"];
					echo "
					<script>
							alert('Databerhasil !');
							document.location.href='$backreload';
							</script>
								";
					// $this->session->set_flashdata('success', 'Thanks for contact us');
					// redirect('contact');

				}


				}


public function messagebox(){

}





}
