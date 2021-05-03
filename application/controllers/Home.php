<?php
class Home extends CI_Controller{
    public function index(){
        $data['adbiz'] = $this->all_model->get_biz_cat_join("biz_status = 'Active' AND biz_type = 'Premium' ORDER BY biz_id DESC");
        $data['schoolbiz'] = $this->all_model->get_biz_cat_join("biz_cat = 'secondary-schools' OR biz_cat = 'play-school-1' OR biz_cat = 'institute-and-classes' AND biz_status = 'Active' ORDER BY RAND() LIMIT 3");

        $data['eventbiz'] = $this->all_model->get_biz_cat_join("biz_cat = 'even-planner' OR biz_cat = 'tent-material-traders' OR biz_cat = 'tent-house-supplier' OR biz_cat = 'light-declaration' AND biz_status = 'Active' ORDER BY RAND() LIMIT 3");

        $data['medbiz'] = $this->all_model->get_biz_cat_join("biz_cat = 'gym' OR biz_cat = 'dietician' OR biz_cat = 'homeopathy-doctor' OR biz_cat = 'fitness-equipment-store' OR biz_cat = 'ayurvedic-doctor' OR biz_cat = 'pathology-equipments' AND biz_status = 'Active' ORDER BY RAND() LIMIT 3");

        $data['manubiz'] = $this->all_model->get_biz_cat_join("biz_cat = 'sebai-vermicelli-gulal-manufacturer' OR biz_cat = 'flour-mill' OR biz_cat = 'masala' OR biz_cat = 'dal-mill' OR biz_cat = 'paper-cup-glass' AND biz_status = 'Active' ORDER BY RAND() LIMIT 3");

        $data['cat'] = $this->all_model->get_data_cat('category',['cat_parent_id' => '000','cat_status' => 'Active']);
        $this->load->view('public/inc/header.php');
        $this->load->view('public/index.php',$data);
        $this->load->view('public/inc/footer.php');
    }
    public function listing($slug=NULL,$mslug=NULL){
        $slug = $this->uri->segment(4);
        $mslug = $this->uri->segment(3);
        
        $data['biz'] = $this->all_model->get_biz_cat_join("biz_cat = '$slug' AND biz_status = 'Active'");
        $data['cat'] = $this->all_model->get_data('category',['cat_id' => $mslug]);
        $data['scat'] = $this->all_model->get_data('category',['cat_parent_id' => $mslug]);
        $this->load->view('public/inc/header.php');
        $this->load->view('public/listing.php',$data);
        $this->load->view('public/inc/footer.php');
    }
    //hy

    public function business($cat_slug=NULL,$slug=NULL){
        $slug = $this->uri->segment(4);
        $cat_slug = $this->uri->segment(3);
        $data['biz'] = $this->all_model->get_biz_cat_join("biz_slug = '".$slug."' AND biz_status = 'Active'");
        $data['rel_biz'] = $this->all_model->get_biz_cat_join("biz_cat = '".$cat_slug."' AND biz_slug != '".$slug."' AND biz_status = 'Active' ORDER BY RAND() LIMIT 2");
        $this->load->view('public/inc/header.php');
        $this->load->view('public/single-list.php',$data);
        $this->load->view('public/inc/footer.php');
    }
    
  public function category($id=NULL,$slug=NULL){
        $slug = $this->uri->segment(4);
        $id = $this->uri->segment(3);
        $data['cat'] = $this->all_model->get_data('category',['cat_id' => $id,'cat_status' => 'Active']);
        $data['scat'] = $this->all_model->get_data('category',['cat_parent_id' => $id,'cat_status' => 'Active']);
        $data['biz'] = $this->all_model->get_biz_cat_join("biz_mcat = '$id' AND biz_status = 'Active'");
        $this->load->view('public/inc/header.php');
        $this->load->view('public/category-search.php',$data);
        $this->load->view('public/inc/footer.php');
    }
    public function cat(){
        $data['cat'] = $this->all_model->get_data_cat('category',['cat_parent_id' => '000','cat_status' => 'Active']);
        $this->load->view('public/inc/header.php');
        $this->load->view('public/cat-list.php',$data);
        $this->load->view('public/inc/footer.php');
    }

     public function login(){
        $this->form_validation->set_rules('admin_email','Email','required');
        $this->form_validation->set_rules('admin_password','Password','required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

        if($this->form_validation->run()==TRUE){
            //true
            $username = $this->input->post('admin_email');
            $password = $this->input->post('admin_password');

            if($this->all_model->login($username, $password)==TRUE){
                $admin_email=$this->all_model->get_data("admin",['admin_email'=>$username]);
                $session = [
                    'admin_email' => $admin_email
                ];
                $this->session->set_userdata($session);
                redirect(base_url().'A/index');
            }
            else{
                $this->session->set_flashdata('error','Email or Password incorrect!');
                redirect(base_url().'home/login');
            }
        }
        else{
            //false
            $this->load->view('auth/login.php');
        }
    }
}    
?>