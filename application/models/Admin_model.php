<?php




 class Admin_model extends CI_Model
 {


  public function __construct()
   {

     $this->load->database();
   }

public function pagination_event($perPage,$start){
  $this->db->order_by("noevent", "desc");
  return $get=$this->db->get('events',$perPage,$start)->result_array();
}

public function pagination_acara($perPage,$start){
  $this->db->order_by("no_acara", "desc");
  return $get=$this->db->get('gallery',$perPage,$start)->result_array();
}


public function pagination_event_latest($perPage,$start){
  $this->db->order_by("noevent", "desc" );


  return $get=$this->db->get('events',$perPage,$start)->result_array();
}
public function pagination_anggota($perPage,$start){
  $this->db->order_by("noanggota", "asc");
  return $get=$this->db->get('daftaranggota',$perPage,$start)->result_array();
}
public function pagination_contact_message($perPage,$start){
  $this->db->order_by("no_message", "desc");
  return $get=$this->db->get('contact_message',$perPage,$start)->result_array();
}

public function search($title){
  $this->db->select('*');
  $this->db->from('events');
  $this->db->like('title',$title);
$this->db->or_like('subject',$title);
$this->db->or_like('date',$title);
  $query=$this->db->get();
 return $query->result_array();
}
   public function get_news($slug = FALSE){

     if($slug === FALSE){

       $this->db->order_by("noevent", "desc");
   $query = $this->db->get("events");
     return $query->result_array();
        }

   $query = $this->db->get_where('events',array('slug'=> $slug));
   return $query->row_array();
 }

 public function get_image($nmacara=FALSE){
   $query = $this->db->get_where('image',array('nama_acara'=> $nmacara));
   return $query->result_array();
 }

 public function get_image_acara($nogambar=FALSE){
   $query =$this->db->get_where('image',array('nogambar'=>$nogambar));
   return $query->row_array();
 }

 public function get_subject(){
 $data=$this->uri->segment(3);
 $query = $this->db->get_where('gallery',array('nama_acara'=> $data));
 return $query->row_array();

 }
//  public function get_subject(){
//  $data=$this->uri->segment(3);
// $this->db->select('content_acara','nama_acara');
// $this->db->from('gallery');
// $this->db->where('nama_acara',$data);
// $query=$this->db->get();
// return $query->result_array();
//
//  }

public function get_gallery($nmacara=false){
  $this->db->order_by("nama_acara","desc");
  $query = $this->db->get("gallery");
  return $query->result_array();
}






 public function get_noevent($noevent = FALSE){
 $query = $this->db->get_where('events',array('noevent'=> $noevent));
 return $query->row_array();
}
public function get_message($no_message = FALSE){
$query = $this->db->get_where('contact_message',array('no_message'=> $no_message));
return $query->row_array();
}


public function set_event($file_name){
  $this->load->helper('url');



  $slug=url_title($this->input->post('title'),'dash',true);
$this->load->library('upload');
  $data =array(
    'title'=>$this->input->post('title'),
    'subject'=>$this->input->post('subject'),
    'date'=>$this->input->post('date'),
    'picture'=>$file_name,
    'slug'=>$slug

  );

  return $this->db->insert('events',$data);
}

public function set_gallery( $new_name){
  $this->load->helper('url');
  $nmacara=url_title($this->input->post('nama_acara'),'dash',true);
  $this->load->library('upload');
  $data= array(
    'nama_acara'=>$nmacara,
    'content_acara' =>$this->input->post('content_acara'),
    'subject' =>$this->input->post('subject'),
    'date' =>$this->input->post('date'),
    'gambar_acara'=>$new_name
 );
 return $this->db->insert('gallery',$data);
}

public function set_gambar($data = array()){

  $this->load->library('upload');


 $insert = $this->db->insert_batch('image',$data);
       return $insert?true:false;
 // return $this->db->insert('image',$data);
}

// public function update_image_acara($nogambar,$file_name){
//
// $this->load->library('upload');
//   $data =array(
//
//     'date'=>$this->input->post('date'),
//     'gambar'=>$file_name,
//
//
//   );
//     $this->db->where('nogambar',$nogambar);
//     return $this->db->update('image',$data);
// }


public function set_message(){
    $data=array(
      'nama' =>$this->input->post('nama') ,
      'email' =>$this->input->post('email') ,
      'message'=>$this->input->post('message'),
      'date'=>$this->input->post('date')
  );

  return $this->db->insert('contact_message',$data);
}

public function add_anggota(){
  $this->load->helper('url');
  $data =array(
    'nama_anggota'=>$this->input->post('nama_anggota'),
    'angkatan'=>$this->input->post('angkatan'),
  );

  return $this->db->insert('daftaranggota',$data);
}
public function update_image_acara($nogambar,$new_name){

$this->load->library('upload');
  $data =array(

    'nama_acara'=>$this->input->post('nama_acara'),
    'date'=>$this->input->post('date'),
    'gambar'=>$new_name


  );
    $this->db->where('nogambar',$nogambar);
    return $this->db->update('image',$data);
}

public function update_event($noevent,$file_name){
  $this->load->helper('url');
  $slug=url_title($this->input->post('title'),'dash',true);
$this->load->library('upload');
  $data =array(
    'title'=>$this->input->post('title'),
    'subject'=>$this->input->post('subject'),
    'date'=>$this->input->post('date'),
    'picture'=>$file_name,
    'slug'=>$slug

  );
    $this->db->where('noevent',$noevent);
    return $this->db->update('events',$data);
}

public function baris_acara_img(){
  return $this->db->get('image')->num_rows();
}
public function baris_acara(){
  return $this->db->get('gallery')->num_rows();
}

public function baris(){
  return $this->db->get('events')->num_rows();
}
public function baris_anggota(){
  return $this->db->get('daftaranggota')->num_rows();
}
public function baris_message(){
  return $this->db->get('contact_message')->num_rows();
}

public function delete_news($noevent){
    return $this->db->delete('events',array('noevent'=>$noevent));


}
public function delete_message($no_message){
    return $this->db->delete('contact_message',array('no_message'=>$no_message));
}

public function delete_image($nogambar){
  return $this->db->delete('image',array('nogambar'=>$nogambar));
}







public function adminlogin($username,$password){
  $this->db->where('username',$username);
  $this->db->where('password',$password);
  $query = $this->db->get('login');

    if($query->num_rows()>0){
      return true;
    }else{
      return false;
    }


}









   }// tutup semua


 ?>
