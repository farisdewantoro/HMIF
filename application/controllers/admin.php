<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->library('session');
$this->load->model('admin_model');
$this->load->helper('form');
$this->load->library('form_validation');
$this->load->library('upload');
		$this->load->helper('url_helper');
		$this->load->helper('text');
		$this->load->helper('date');
		$this->load->library('pagination');
	}







	public function home($slug = null)
	{
		$data['events']=$this->admin_model->get_news();

		if ($this->session->has_userdata('username')){
		$this->load->view('admin/pages/static/header');
		$this->load->view('admin/pages/forms/home',$data);
		$this->load->view('admin/pages/static/footer');
}else{
	redirect('admin/login');

}
	}
	public function login(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->view('admin/pages/forms/login');
	}
	public function login_validation(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','required');
	    $this->form_validation->set_rules('password','password','required');
	if ($this->form_validation->run()) {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->admin_model->adminlogin($username,$password)){
			$session_data =array(
				'username'=>$username
			);
			$this->session->set_userdata($session_data);
			redirect('admin/home');
		}else {
			$this->session->set_flashdata('error','invalid username and password');
			redirect('admin/login');
		}
	}else {
		$this->login();
	}


	}


	 function logout(){
			$this->session->unset_userdata('username');
			redirect('admin/login');
	}






	public function allevent($slug = null)
	{
		$row=$this->admin_model->baris();
		$this->load->library('form_validation');
		$config['base_url'] = 'http://localhost/HMIFFF/admin/allevent';
		$config['total_rows'] = $row;
		$config['per_page'] = 8;
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

		$start=$this->uri->segment(3);
		$this->pagination->initialize($config);


		$data['events']=$this->admin_model->pagination_event($config['per_page'],$start);
		// $data['events']=$this->admin_model->get_news();
// $data['event_item']=$this->admin_model->get_news($slug);
		if ($this->session->has_userdata('username')){
		$this->load->view('admin/pages/static/header');
		$this->load->view('admin/pages/forms/allevent',$data);

		$this->load->view('admin/pages/static/footer');
}else{
	redirect('admin/login');

}
	}



	public function activity_acara()
	{
		$row=$this->admin_model->baris_acara();
		$this->load->library('form_validation');
		$config['base_url'] = 'http://localhost/HMIFFF/admin/activity';
		$config['total_rows'] = $row;
		$config['per_page'] = 8;
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

		$start=$this->uri->segment(3);
		$this->pagination->initialize($config);


		$data['acara']=$this->admin_model->pagination_acara($config['per_page'],$start);
		// $data['events']=$this->admin_model->get_news();
	// $data['event_item']=$this->admin_model->get_news($slug);
		if ($this->session->has_userdata('username')){
		$this->load->view('admin/pages/static/header');
		$this->load->view('admin/pages/forms/activity',$data);

		$this->load->view('admin/pages/static/footer');
	}else{
	redirect('admin/login');

	}
	}

	public function activity_acara_img($nmacara = NULL)
	{
    $data['content_item']=$this->admin_model->get_subject($nmacara);
		$data['acara']=$this->admin_model->get_image($nmacara);
		if ($this->session->has_userdata('username')){
		$this->load->view('admin/pages/static/header');
		$this->load->view('admin/pages/forms/image',$data);
		$this->load->view('admin/pages/static/footer');
	}else{
	redirect('admin/login');

	}

	}


	public function search($title=null)
	{

		$title=$this->input->post('search');

		if(isset($title) and !empty($title)){
			$data['events']=$this->admin_model->search($title);

			$this->load->view('admin/pages/static/header');
			$this->load->view('admin/pages/forms/allevent',$data);
			$this->load->view('admin/pages/static/footer');
		}else{
			redirect('admin/allevent');
		}

	}


	public function event($slug = NULL)
	{

		$data['event_item']=$this->admin_model->get_news($slug);
		if ($this->session->has_userdata('username')){
		$this->load->view('admin/pages/static/header');
		$this->load->view('admin/pages/forms/event',$data);
		$this->load->view('admin/pages/static/footer');
}else{
	redirect('admin/login');

}
	}




	public function mailbox($no_message=null)
	{

		$data['message_item']=$this->admin_model->get_message($no_message);
		if ($this->session->has_userdata('username')){
		$this->load->view('admin/pages/static/header');
		$this->load->view('admin/pages/forms/mailbox',$data);
		$this->load->view('admin/pages/static/footer');
}else{
	redirect('admin/login');

}
	}

public function uploadgambar($nmacara=null){
	if($this->session->has_userdata('username')){
		$this->form_validation->set_rules('nama_acara','Nama acara','trim|required|min_length[3]');
			$this->form_validation->set_rules('date','required');
			if (empty($_FILES['gambar']['name']))
		{
		$this->form_validation->set_rules('gambar_acara', 'GAMBAR', 'required');
		}
		if($this->form_validation->run()===FALSE){
			$data['acara_nama']=$this->admin_model->get_gallery($nmacara);
					$this->load->view('admin/pages/static/header');
			$this->load->view('admin/pages/forms/uploadgambar',$data);
				$this->load->view('admin/pages/static/footer');
		}else{

			if (!empty($_FILES['gambar']['name']))
		{
      $this->load->library('upload');

   $files = $_FILES;
   $cpt = count($_FILES['gambar']['name']);
   for($i=0; $i<$cpt; $i++){
     $_FILES['gambar']['name']= $files['gambar']['name'][$i];
             $_FILES['gambar']['type']= $files['gambar']['type'][$i];
             $_FILES['gambar']['tmp_name']= $files['gambar']['tmp_name'][$i];
             $_FILES['gambar']['error']= $files['gambar']['error'][$i];
             $_FILES['gambar']['size']= $files['gambar']['size'][$i];
             $uploadPath = 'uploads/img_acara/';
              $config['upload_path'] = $uploadPath;
              $config['allowed_types'] = 'gif|jpg|png';
							$name =$this->input->post('nama_acara');
							$new_name = $name."_".date('Y-m-d')."_TIME_".date('h-i-s-A')."_".$_FILES['gambar']['name'];
								 $config['file_name'] = $new_name;
              $this->load->library('upload', $config);
             $this->upload->initialize($config);
             $this->upload->do_upload('gambar');
             $dataInfo = $this->upload->data();

              $uploadData[$i]['gambar'] = $dataInfo['file_name'];
              $uploadData[$i]['date'] = $this->input->post('date');
              $uploadData[$i]['nama_acara'] = $this->input->post('nama_acara');
   }




    $result_set = $this->admin_model->set_gambar($uploadData);
      redirect('admin/uploadgambar');

		}



	}

}else {
  redirect('admin/login');
}
}


public function delete_images($nogambar){
	$this->admin_model->delete_image($nogambar);

	$backreload = $_SERVER["HTTP_REFERER"];
	echo "
	<script>
			alert('Gambar Berhasil Dihapus !');
			document.location.href='$backreload';
			</script>
				";
}





  public function set_upload_options()
{
    //upload an image options
    $config = array();
  $config['upload_path'] = './uploads/acara';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = '0';
    $config['overwrite']     = FALSE;

    return $config;
}

public function acara_gallery(){
if($this->session->has_userdata('username')){
	$this->form_validation->set_rules('nama_acara','Nama acara','trim|required|min_length[3]');
		$this->form_validation->set_rules('subject','Tanggal Pelaksanaan','required');
		$this->form_validation->set_rules('content_acara','Isi Kegiatan','required');
		$this->form_validation->set_rules('date','required');
		if (empty($_FILES['gambar_acara']['name']))
{
	$this->form_validation->set_rules('gambar_acara', 'GAMBAR', 'required');
}

if($this->form_validation->run()===FALSE){
			$this->load->view('admin/pages/static/header');
	$this->load->view('admin/pages/forms/galleryacara');
		$this->load->view('admin/pages/static/footer');
}else{
	if (!empty($_FILES['gambar_acara']['name']))
{

	$config['max_size']= 10000;

	 $config['upload_path'] = './uploads/acara';
	 $config['allowed_types'] = 'gif|jpg|png|jpeg';
	 $new_name = "Acara_".date('Y-m-d')."_TIME_".date('h-i-s-A')."_".$_FILES['gambar_acara']['name'];
			$config['file_name'] = $new_name;

	 $this->upload->initialize($config);

	 if ($this->upload->do_upload('gambar_acara'))
	 {

			 $img = $this->upload->data();

			 $this->admin_model->set_gallery($new_name);
			 $this->session->set_flashdata('success', 'Insert data succes');

			 redirect('admin/galleryacara');


	 }
	 else
	 {
			 $this->session->set_flashdata('error', 'Somthing worng. Error!!');
			 echo $this->upload->display_errors();

	 }
}


}



}else {
	redirect('admin/login');
}

	}



						public function create(){
							if ($this->session->has_userdata('username')){
						  // $this->load->helper('form');
						  // $this->load->library('form_validation');
							// $this->load->library('upload');
						  $this->form_validation->set_rules('title','judul','trim|required|min_length[5]');
						    $this->form_validation->set_rules('subject','subject','required');
								$this->form_validation->set_rules('date','required');
								if (empty($_FILES['picture']['name']))
					{
					    $this->form_validation->set_rules('picture', 'Picture', 'required');
					}


						if($this->form_validation->run()===FALSE){
							    $this->load->view('admin/pages/static/header');
						  $this->load->view('admin/pages/forms/create');
							  $this->load->view('admin/pages/static/footer');
						}else{
							if (!empty($_FILES['picture']['name']))
					 {
							 $config['upload_path'] = './uploads/event';
							 $config['allowed_types'] = 'gif|jpg|png|jpeg';

							 $new_name = "EVENT_".date('Y-m-d')."_TIME_".date('h-i-s-A')."_".$_FILES['picture']['name'];
 						 			$config['file_name'] = $new_name;

							 $this->upload->initialize($config);

							 if ($this->upload->do_upload('picture'))
							 {

									 $img = $this->upload->data();

									 $this->admin_model->set_event($new_name);
									 $this->session->set_flashdata('success', 'Insert data succes');

									 redirect('admin/create');


							 }
							 else
							 {
								   $this->session->set_flashdata('error', 'Somthing worng. Error!!');
									 echo $this->upload->display_errors();

							 }
					 }


						}


					}else {
						redirect('admin/login');
					}

						}



						public function edit_image_acara($nogambar){
							if ($this->session->has_userdata('username')){
								$this->form_validation->set_rules('date','required');
$this->form_validation->set_rules('nama_acara','nama acara','required');
						if($this->form_validation->run()===FALSE){
								$data['img_item'] = $this->admin_model->get_image_acara($nogambar);

									$this->load->view('admin/pages/static/header');
							$this->load->view('admin/pages/forms/edit_images',$data);
								$this->load->view('admin/pages/static/footer');

						}else{
							if (empty($_FILES['gambar']['name']))
						{
						 $file_name=$this->input->post('old');
						 $this->admin_model->update_image_acara($nogambar,$file_name);
						 $this->session->set_flashdata('success', 'Insert data succes');
						  $pindah = $this->input->post('nama_acara');
						 redirect('admin/image/'.$pindah);
						}
						else {
							if (!empty($_FILES['gambar']['name']))
						{
							 $config['upload_path'] = './uploads/img_acara';
							 $config['allowed_types'] = 'gif|jpg|png|jpeg';
							 $name =$this->input->post('nama_acara');
 							$new_name = $name."_".date('Y-m-d')."_TIME_".date('h-i-s-A')."_".$_FILES['gambar']['name'];
 								 $config['file_name'] = $new_name;
							 $this->upload->initialize($config);

							 if ($this->upload->do_upload('gambar'))
							 {

									 $img = $this->upload->data();

									 $this->admin_model->update_image_acara($nogambar,$new_name);
									 $this->session->set_flashdata('success', 'Insert data succes');

									 $pindah = $this->input->post('nama_acara');
									 redirect('admin/image/'.$pindah);


							 }
							 else
							 {
									 $this->session->set_flashdata('error', 'Somthing worng. Error!!');
									 echo $this->upload->display_errors();

							 }
						}
						}

						}


						}else {
						redirect('admin/login');
						}

						}






										public function update($noevent){
											if ($this->session->has_userdata('username')){

											$this->form_validation->set_rules('title','judul','trim|required|min_length[5]');
												$this->form_validation->set_rules('subject','subject','required');
												$this->form_validation->set_rules('date','required');



										if($this->form_validation->run()===FALSE){
												$data['event_item'] = $this->admin_model->get_noevent($noevent);

													$this->load->view('admin/pages/static/header');
											$this->load->view('admin/pages/forms/update',$data);
												$this->load->view('admin/pages/static/footer');

										}else{
											if (empty($_FILES['picture']['name']))
								{
										 $file_name=$this->input->post('old');
										 $this->admin_model->update_event($noevent,$file_name);
										 $this->session->set_flashdata('success', 'Insert data succes');
										 redirect('admin/create');
								}
								else {
									# code...




											if (!empty($_FILES['picture']['name']))
									 {
											 $config['upload_path'] = './uploads/';
											 $config['allowed_types'] = 'gif|jpg|png|jpeg';

											 $this->upload->initialize($config);

											 if ($this->upload->do_upload('picture'))
											 {

													 $img = $this->upload->data();
													 $file_name = $img['file_name'];
													 $this->admin_model->update_event($noevent,$file_name);
													 $this->session->set_flashdata('success', 'Insert data succes');

													 redirect('admin/create');


											 }
											 else
											 {
													 $this->session->set_flashdata('error', 'Somthing worng. Error!!');
													 echo $this->upload->display_errors();

											 }
									 }
}

										}


									}else {
										redirect('admin/login');
									}

										}





	public function delete($noevent){
 $this->admin_model->delete_news($noevent);
redirect('admin/allevent');
}


public function addanggota(){

if ($this->session->has_userdata('username')) {



  $this->load->helper('form');
  $this->load->library('form_validation');
  $this->form_validation->set_rules('nama_anggota','nama_anggota','required');
    $this->form_validation->set_rules('angkatan','angkatan','required');

if($this->form_validation->run()===FALSE){
	$this->load->view('admin/pages/static/header');
$this->load->view('admin/pages/forms/addanggota');
$this->load->view('admin/pages/static/footer');
}else{
  $this->admin_model->add_anggota();
  redirect('admin/addanggota');
}

}else {
	redirect('admin/login');
}

}

public function messagebox()
{
	$row=$this->admin_model->baris_message();

	$this->load->library('pagination');

	$config['base_url'] = 'http://localhost/HMIFFF/admin/contact_message';
	$config['total_rows'] = $row;
	$config['per_page'] = 8;
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

	$start=$this->uri->segment(3);
	$this->pagination->initialize($config);


	$data['message']=$this->admin_model->pagination_contact_message($config['per_page'],$start);
	// $data['events']=$this->admin_model->get_news();
// $data['event_item']=$this->admin_model->get_news($slug);
	if ($this->session->has_userdata('username')){
	$this->load->view('admin/pages/static/header');
	$this->load->view('admin/pages/forms/contact_message',$data);

	$this->load->view('admin/pages/static/footer');
}else{
redirect('admin/login');

}
}


public function delete_message($no_message){
$this->admin_model->delete_message($no_message);
redirect('admin/contact_message');
}



}
