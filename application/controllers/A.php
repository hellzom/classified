<?php
class A extends CI_Controller{
  public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('admin_email')){
            redirect('home/login');
        }
    }

    public function index(){
         $this->load->view('admin/inc/header.php');
        $this->load->view('admin/index.php');
        $this->load->view('admin/inc/footer.php');
    }

    public function cat(){
      $this->form_validation->set_error_delimiters("<small class='text-danger'>","</small>");
      $this->form_validation->set_rules("cat_name","Category Name","required|is_unique[category.cat_name]");
  
      if($this->form_validation->run()==TRUE){
        $config['upload_path']  = './assets/bizimg/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
                $config['max_size'] = 1000;
                $config['encrypt_name'] = TRUE;
                
                //$this->upload->initialize($config);
                $this->load->library('image_lib',$config);
                $this->load->library('upload',$config);

                //$upload_error = array();
                if (!$this->upload->do_upload('cat_banner'))
                {
                   $this->load->library('image_lib', $config);

                    $this->image_lib->resize();
                    $file_name = $this->upload->data('file_name');
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $this->upload->data('file_name');
                    $config['create_thumb'] = TRUE;
                    $config['maintain_ratio'] = TRUE;

                   
                    //$upload_error = array('error' => $this->upload->display_errors());
                    $error =  $this->session->set_flashdata('img_error',$this->upload->display_errors());
                    redirect(base_url('A/cat'));
                 }
            else{

          $fields = [
              'cat_name' => $_POST['cat_name'],
              'cat_banner' => $this->upload->data('file_name'),
              'cat_parent_id' => '000',
              'cat_slug' => url_title($_POST['cat_name'],'dash',TRUE),
              'cat_status' => $_POST['cat_status']
          ];
          
          $this->all_model->insert_data('category',$fields);
          $this->session->set_flashdata('cat_add',"<script>swal('Woah!', 'Category Added!', 'success'); </script>");

          redirect(base_url('A/all_cat'));
      }
    }
      else{
         $this->load->view('admin/inc/header.php');
          $this->load->view('admin/admin-add-cat.php');
          $this->load->view('admin/inc/footer.php');
      }
         
    }


    public function add_subcat($id=NULL){
      $id = $this->uri->segment(3);
      $this->form_validation->set_error_delimiters("<small class='text-danger'>","</small>");
      $this->form_validation->set_rules("cat_name","Category Name","required|is_unique[category.cat_name]");
  
      if($this->form_validation->run()==TRUE){
        $config['upload_path']  = './assets/bizimg/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
                $config['max_size'] = 1000;
                $config['encrypt_name'] = TRUE;
                
                //$this->upload->initialize($config);
                $this->load->library('image_lib',$config);
                $this->load->library('upload',$config);

                //$upload_error = array();
                if (!$this->upload->do_upload('cat_banner'))
                {
                   $this->load->library('image_lib', $config);

                    $this->image_lib->resize();
                    $file_name = $this->upload->data('file_name');
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $this->upload->data('file_name');
                    $config['create_thumb'] = TRUE;
                    $config['maintain_ratio'] = TRUE;
                    $config['width']         = 75;
                    $config['height']       = 50;

                   
                    //$upload_error = array('error' => $this->upload->display_errors());
                    $error =  $this->session->set_flashdata('img_error',$this->upload->display_errors());
                    redirect(base_url('A/add_subcat'));
                 }
            else{

          $fields = [
              'cat_name' => $_POST['cat_name'],
              'cat_banner' => $this->upload->data('file_name'),
              'cat_parent_id' => $id,
              'cat_slug' => url_title($_POST['cat_name'],'dash',TRUE),
              'cat_status' => $_POST['cat_status']
          ];
          
          $this->all_model->insert_data('category',$fields);
          $this->session->set_flashdata('subcat_add',"<script>swal('Awesome!', 'Sub-Category Added!', 'success'); </script>");

          redirect(base_url('A/all_cat'));
      }
    }
      else{
         $this->load->view('admin/inc/header.php');
          $this->load->view('admin/admin-add-subcat.php');
          $this->load->view('admin/inc/footer.php');
      }
         
    }

    public function all_cat(){
      $data['cat'] = $this->all_model->get_data('category',['cat_parent_id' => '000']);
         $this->load->view('admin/inc/header.php');
        $this->load->view('admin/admin-all-cat.php',$data);
        $this->load->view('admin/inc/footer.php');
    }

    public function manage_cat($id){
      $id = $this->uri->segment(3);
      $this->form_validation->set_error_delimiters("<small class='text-danger'>","</small>");
      $this->form_validation->set_rules("cat_name","Category Name","required|is_unique[category.cat_name]");
  
      if($this->form_validation->run()==TRUE){

          $fields = [
              'cat_name' => $_POST['cat_name'],
              'cat_status' => $_POST['cat_status']
          ];
          
          $this->all_model->update_data('category',$fields,['cat_id' => $id]);
          $this->session->set_flashdata('cat_updated',"<script>swal('Great!', 'Category Updated!', 'success'); </script>");

          redirect(base_url('A/all_cat'));
      }
      else{
        $id = $this->uri->segment(3);
        $data['scat'] = $this->all_model->get_data('category',['cat_id' => $id]);
        $data['subcat'] = $this->all_model->get_data('category',['cat_parent_id' => $id]);
         $this->load->view('admin/inc/header.php');
        $this->load->view('admin/admin-manage-cat.php',$data);
        $this->load->view('admin/inc/footer.php');
    }
  }
   public function cat_icon_update($icon_id = NULL,$icon=NULL){
      $icon_id = $this->uri->segment(3);
      $icon = $this->uri->segment(4);

      $config['upload_path']          = './assets/bizimg/';
      $config['allowed_types']        = 'jpg|png|svg|jpeg';
      $config['max_size']             = 1000;
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload', $config);
      //$upload_error = array();
      if (!$this->upload->do_upload('cat_banner'))
      {
         // $upload_error = array('error' => $this->upload->display_errors());
          $error =  $this->session->set_flashdata('icon_error',$this->upload->display_errors());
          redirect(site_url('A/manage_cat/'.$icon_id));
      }
      else{

        $data['get_file'] = $this->all_model->get_data('category',['cat_id'=>$icon_id]);
        //$this->all_model->update_data('category',['cat_id'=>$icon]);
        foreach ($data['get_file'] as $key) {
          $key->cat_banner;
          unlink('./assets/bizimg/'.$key->cat_banner);
        }

          $this->all_model->update_data('category',['cat_banner' => $this->upload->data('file_name')],['cat_id'=>$icon_id]);
            redirect(site_url('A/manage_cat/'.$icon_id));
      }
      //$data['get_file'] = $this->all_model->get_data('file',['file_post_id'=>$unlink_file_id]);

      //$this->->all_model->delete("post","post_id"=>$del_id);
      // $this->all_model->update_data('post',['post_id'=>$del_id]);
      // foreach ($data['get_file'] as $key) {
      //   $key->file_name;
      //   unlink('./assets/file/'.$key->file_name);
      // }
      // redirect("A/all_post");  
    }
  
    public function send_sms(){
      $data['biz'] = $this->all_model->get_data('business',['biz_status' => 'Active']);
      $data['sms_balance'] = $this->all_model->get_data('sms_balance',['sms_balance_id' => 1]);
      if(isset($_POST['sent_sms'])){
        $substract_sms = sizeof($_POST['sms_numbers']);
        $num_string = implode(', ', $_POST['sms_numbers']);
        $fields = [
              'sms_numbers' => $num_string,
              'sms_content' => $_POST['sms_content']
          ];
          $mobile = $num_string;
          $title = $_POST['sms_content'];

          $this->load->helper('send_sms');
          send_sms($mobile,$title);
          $this->all_model->insert_data('sms',$fields);
          
          foreach ($data['sms_balance'] as $key) {
            global $balance;
            $balance = $key->sms_balance_record;
          };

          $new_balance = $balance - $substract_sms;

          $update = [
            'sms_balance_record' => $new_balance
          ];
          $this->all_model->update_data('sms_balance',$update,['sms_balance_id' => 1]);

          $this->session->set_flashdata('sms_sent',"<script>swal('Awesome!', 'SMS SENT SUCCESSFULLY!', 'success'); </script>");
          redirect(base_url('A/index'));

          }
      
      

        $this->load->view('admin/inc/header.php');
        $this->load->view('admin/admin-send-sms.php',$data);
        $this->load->view('admin/inc/footer.php');
    }
  public function add_biz(){
      $this->form_validation->set_error_delimiters("<small class='text-danger'>","</small>");
      $this->form_validation->set_rules("biz_cat","Biz Cat","required");
      $this->form_validation->set_rules("biz_mcat","Biz Main Cat","required");
      $this->form_validation->set_rules("biz_title","Biz title","required|is_unique[business.biz_title]");
      $this->form_validation->set_rules("biz_contact","Biz Contact","required");
      $this->form_validation->set_rules("biz_user","Biz Owner","required");
      $this->form_validation->set_rules("biz_address","Biz Address","required");
      $this->form_validation->set_rules("biz_street","Biz Street","required");
      $this->form_validation->set_rules("biz_city","Biz City","required");
      $this->form_validation->set_rules("biz_state","Biz State","required");
      $this->form_validation->set_rules("biz_desc","Biz Description","required");
      $this->form_validation->set_rules("biz_type","Biz Type","required");
      $this->form_validation->set_rules("biz_status","Biz Status","required");
      $this->form_validation->set_rules("biz_tags","Biz Tags","required");


      if($this->form_validation->run() == TRUE){
      $config['upload_path']  = './assets/bizimg/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 1000;
                $config['encrypt_name'] = TRUE;
                
                //$this->upload->initialize($config);
                $this->load->library('image_lib',$config);
                $this->load->library('upload',$config);

                //$upload_error = array();
                if (!$this->upload->do_upload('biz_img'))
                {
                   $this->load->library('image_lib', $config);

                    $this->image_lib->resize();
                    $file_name = $this->upload->data('file_name');
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $this->upload->data('file_name');
                    $config['create_thumb'] = TRUE;
                    $config['maintain_ratio'] = TRUE;
                    $config['width']         = 75;
                    $config['height']       = 50;

                   
                    //$upload_error = array('error' => $this->upload->display_errors());
                    $error =  $this->session->set_flashdata('img_error',$this->upload->display_errors());
                    redirect(base_url('A/add_biz'));
                 }
            else{

          $fields = [
              'biz_title' => $_POST['biz_title'],
              'biz_slug' => url_title($_POST['biz_title'],'dash',TRUE),
              'biz_mcat' => $_POST['biz_mcat'],
              'biz_cat' => $_POST['biz_cat'],
              'biz_contact' => $_POST['biz_contact'],
              'biz_alt_contact' => $_POST['biz_alt_contact'],
              'biz_website' => $_POST['biz_website'],
              'biz_user' => $_POST['biz_user'],
              'biz_address' => $_POST['biz_address'],
              'biz_city' => $_POST['biz_city'],
              'biz_state' => $_POST['biz_state'],
              'biz_street' => $_POST['biz_street'],
              'biz_type' => $_POST['biz_type'],
              'biz_desc' => $_POST['biz_desc'],
              'biz_desc_slug' => url_title($_POST['biz_desc'],'dash',TRUE),
              'biz_email' => $_POST['biz_email'],
              'biz_img' =>$this->upload->data('file_name'),
              'biz_tags' => $_POST['biz_tags'],
              'biz_status' => $_POST['biz_status']
          ];
          

          $this->all_model->insert_data('business',$fields);
          $this->session->set_flashdata('biz_add',"<script>swal('Great!', 'Business Added!', 'success'); </script>");
          redirect(base_url('A/all_biz')); 
          } 
        }
          else{

       $data['states'] = $this->all_model->get_data('country_states',['country_name' => 'India']);
       $data['city'] = $this->all_model->get_data('states_cities');
       $data['cat'] = $this->all_model->get_data_cat('category',['cat_parent_id' => '000','cat_status' => 'Active']);
       $data['subcat'] = $this->all_model->get_data_cat('category',['cat_parent_id !=' => '000','cat_status' => 'Active']);
        $this->load->view('admin/inc/header.php');
        $this->load->view('admin/admin-add-biz.php',$data);
        $this->load->view('admin/inc/footer.php');
    }
  }

  public function edit_biz($slug){
    $slug = $this->uri->segment(3);
      $this->form_validation->set_error_delimiters("<small class='text-danger'>","</small>");
      $this->form_validation->set_rules("biz_cat","Biz Cat","required");
      $this->form_validation->set_rules("biz_mcat","Biz Main Cat","required");
      $this->form_validation->set_rules("biz_title","Biz title","required");
      $this->form_validation->set_rules("biz_contact","Biz Contact","required");
      $this->form_validation->set_rules("biz_user","Biz Owner","required");
      $this->form_validation->set_rules("biz_address","Biz Address","required");
      $this->form_validation->set_rules("biz_street","Biz Street","required");
      $this->form_validation->set_rules("biz_city","Biz City","required");
      $this->form_validation->set_rules("biz_state","Biz State","required");
      $this->form_validation->set_rules("biz_desc","Biz Description","required");
      $this->form_validation->set_rules("biz_type","Biz Type","required");
      $this->form_validation->set_rules("biz_status","Biz Status","required");
      $this->form_validation->set_rules("biz_tags","Biz Tags","required");


      if($this->form_validation->run() == TRUE){
          $fields = [
              'biz_title' => $_POST['biz_title'],
              'biz_slug' => url_title($_POST['biz_title'],'dash',TRUE),
              'biz_cat' => $_POST['biz_cat'],
              'biz_mcat' => $_POST['biz_mcat'],
              'biz_contact' => $_POST['biz_contact'],
              'biz_alt_contact' => $_POST['biz_alt_contact'],
              'biz_website' => $_POST['biz_website'],
              'biz_user' => $_POST['biz_user'],
              'biz_address' => $_POST['biz_address'],
              'biz_city' => $_POST['biz_city'],
              'biz_state' => $_POST['biz_state'],
              'biz_street' => $_POST['biz_street'],
              'biz_type' => $_POST['biz_type'],
              'biz_desc' => $_POST['biz_desc'],
              'biz_desc_slug' => url_title($_POST['biz_desc'],'dash',TRUE),
              'biz_email' => $_POST['biz_email'],
              'biz_tags' => $_POST['biz_tags'],
              'biz_status' => $_POST['biz_status']
          ];

          $this->all_model->update_data('business',$fields,['biz_slug' => $slug]);
          $this->session->set_flashdata('biz_edit',"<script>swal('Woah!', 'Business Modified!', 'success'); </script>");
          redirect(base_url('A/all_biz')); 
          } 
       $data['states'] = $this->all_model->get_data('country_states',['country_name' => 'India']);
       $data['city'] = $this->all_model->get_data('states_cities');
       $data['cat'] = $this->all_model->get_data('category',['cat_parent_id' => '000']);
       $data['subcat'] = $this->all_model->get_data('category',['cat_parent_id !=' => '000']);
       $data['biz'] = $this->all_model->get_data('business',['biz_slug' => $slug]);
        $this->load->view('admin/inc/header.php');
        $this->load->view('admin/admin-edit-biz.php',$data);
        $this->load->view('admin/inc/footer.php');
    
  }

  public function add_biz_gallery($slug=NULL,$ImageCount = NULL){
      $slug = $this->uri->segment(3);
      $data['biz'] = $this->all_model->get_data('business',['biz_slug' => $slug]);

        $this->load->library('upload');
        $image = array();
        $ImageCount = count($_FILES['biz_image_img']['name']);
          for($i = 0; $i < $ImageCount; $i++){
            $_FILES['file']['name']       = $_FILES['biz_image_img']['name'][$i];
            $_FILES['file']['type']       = $_FILES['biz_image_img']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['biz_image_img']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['biz_image_img']['error'][$i];
            $_FILES['file']['size']       = $_FILES['biz_image_img']['size'][$i];
            // File upload configuration
              $uploadPath = './assets/bizimg/gallery';
              $config['upload_path'] = $uploadPath;
              $config['allowed_types'] = 'jpg|jpeg|png|gif';
              $config['encrypt_name'] = TRUE;
              // Load and initialize upload library
              $this->load->library('upload', $config);
              $this->upload->initialize($config);
              // Upload file to server
              if($this->upload->do_upload('file')){
              // Uploaded file data
              $imageData = $this->upload->data();
              $uploadImgData[$i]['biz_image_img'] = $imageData['file_name'];
              $uploadImgData[$i]['biz_image_biz_id']= $slug;    
            }
            
          }
          
          if(!empty($uploadImgData)){
          // Insert files data into the database
            //$this->session->set_userdata("img_error","error");
            $this->all_model->multiple_img($uploadImgData);
            //$this->access->insert("product",$field);
          //$this->access->insert("img_product",$img_field);
            $this->session->set_flashdata('success',"<script>swal('Awesome!', 'Business Images Added!', 'success'); </script>");
            redirect("A/gallery/".$slug);
            
          }
        
    }

    public function gallery($slug=NULL){
      $slug = $this->uri->segment(3);
      $data['biz'] = $this->all_model->get_data('business',['biz_slug' => $slug]);
      $data['biz_img'] = $this->all_model->get_data('biz_image',['biz_image_biz_id' => $slug]);
      $this->load->view('admin/inc/header.php');
      $this->load->view('admin/admin-add-biz-gallery.php',$data);
      $this->load->view('admin/inc/footer.php');
    }
    public function all_biz(){
        $data['biz'] = $this->all_model->get_biz_cat_join("biz_status = 'Active' ORDER BY biz_id DESC");
         $this->load->view('admin/inc/header.php');
        $this->load->view('admin/admin-all-biz.php',$data);
        $this->load->view('admin/inc/footer.php');
    }
    public function view_biz($slug=NULL){
        $slug = $this->uri->segment(3);
        $data['biz'] = $this->all_model->get_biz_cat_join("biz_slug = '".$slug."' AND biz_status = 'Active'");
         $this->load->view('admin/inc/header.php');
        $this->load->view('admin/admin-view-biz.php',$data);
        $this->load->view('admin/inc/footer.php');
    }
  public function del_biz_gal($slug=NULL,$id=NULL){
    $id = $this->uri->segment(4);
    $slug = $this->uri->segment(3);
    $this->all_model->delete('biz_image',['biz_image_id' => $id]);
    $this->session->set_flashdata('del_img',"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Business Images Deleted!</strong> successfully.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
          </div>");
    redirect(site_url('A/gallery/'.$slug));
  }

    public function user_session_out(){
    $this->session->unset_userdata("admin_email");
    redirect("Home/login");
    }

   

    
}    
?>