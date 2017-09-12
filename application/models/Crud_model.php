<?php

class Crud_model extends CI_Model {

    public function insertUser () {

        //insert data
        $data = array(
            //assign data into array elements
            'stu_reg' => $this->input->post('stu_reg'),
            'stu_name' => $this->input->post('stu_name'),
            'stu_uni' =>$this->input->post('stu_uni'),

        );
        //insert data to the database
        $this->db->insert('users',$data);

    }

    public function getUsers() {
		
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('stu_reg');
		$query = $this->db->get();

        return $query->result(); 
        
    }

    public function edit($stu_id) {
        
        $this->db->where('stu_id',$stu_id);
        $query = $this->db->get_where('users', array('stu_id' => $stu_id));
    
        return $query->row();
    
         
    }
    public function update($stu_id) {
        
        $data = array(
        'stu_reg' => $this->input->post('stu_reg'),
        'stu_name' => $this->input->post('stu_name'),
        'stu_uni' =>$this->input->post('stu_uni'),

        );
        $this->db->where('stu_id',$stu_id);
        $this->db->update('users',$data);
        return $stu_id;
    }
     
    public function delete($stu_id) {

        $this->db->where('stu_id',$stu_id);
        $this->db->delete('users');
        redirect('Crud');	

    }
}
?>
