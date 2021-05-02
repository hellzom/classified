<?php 
class All_model extends CI_Model{

public function get_post(){
		if($slug===FALSE){
			$data = $this->db->get('post');

			return $data->result();
		}

		$data = $this->db->get_where('post',['slug'=>$slug]);

		//row_query instead of for loop
		return $data->row_array();

	}

//insert data
	public function insert_data($table,$fields){
		$this->db->insert($table,$fields);
	}
	
  //image uploading

  public function multiple_images($image = array()){
    return $this->db->insert_batch('profile_images',$image);
  }
	
//update data
	public function update_data($table,$fields,$con){
            $this->db->update($table,$fields,$con);
        }

//get data
	public function get_data($table,$con=NULL){
		if($con==NULL){
    	    $data = $this->db->get($table);
    	            return $data->result();
    	}
    	else{
    	    $data = $this->db
    	      			 ->where($con)
    	      			 ->get($table);
    	    return $data->result();
    	}
    }
  
  public function get_data_cat($table,$con=NULL){
		if($con==NULL){
    	    $data = $this->db->get($table);
    	            return $data->result();
    	}
    	else{
    	    $data = $this->db
    	      			 ->where($con)
                   ->order_by('cat_name', 'ASC')
    	      			 ->get($table);
    	    return $data->result();
    	}
    }

    public function get_last_data($table,$con=NULL){
    if($con==NULL){
          $data = $this->db
                       ->limit(1)
                       ->get($table);
                  return $data->result();
      }
      else{
          $data = $this->db
                   ->where($con)
                   ->limit(1)
                   ->get($table);
          return $data->result();
      }
    }

//joined data
 	public function get_biz_cat_join($con=NULL){
    $sql = "SELECT * FROM business
       JOIN category
            ON business.biz_cat = category.cat_slug
       WHERE $con";
    $data = $this->db->query($sql);
    return $data->result();
   }
   public function get_all_biz($con=NULL){
   	$sql = "SELECT * FROM business
       JOIN category
            ON category.cat_slug = business.biz_cat 
       WHERE $con";
   	$data = $this->db->query($sql);
   	return $data->result();
   }

public function get_batch_data_con($con=null){
   	$sql = "SELECT batch.*, employee.*, branch.*, course.*, apply_batch.*,student.*
   	FROM batch
   	    JOIN employee
   	        ON employee.emp_id = batch.batch_teacher
   	    JOIN branch
   	        ON branch.branch_id = batch.batch_branch
   	    JOIN course
   	        ON course.course_id = batch.batch_course
        JOIN apply_batch
            ON apply_batch.apply_batch_id = batch.batch_id
        JOIN student
            ON student.id = apply_batch.apply_stu_id
        WHERE $con";

   	$data = $this->db->query($sql);

   	return $data->result();
   }



//delete data
    public function delete($table, $con){
		$this->db
			 ->where($con)
			 ->delete($table);
			 return TRUE;
	}
	


//login
	public function login($username, $password){
		$check = $this->db
					  ->where('admin_email',$username)
					  ->where('admin_password',$password)
					  ->get('admin');

		if($check->num_rows()>0){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

  public function multiple_file($file = array()){
    return $this->db->insert_batch('profile_images',$image);
  }

  public function multiple_img($image = array()){
    return $this->db->insert_batch('biz_image',$image);
  }

}
 ?>