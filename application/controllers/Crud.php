<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function index() {

		$this->load->view('crud_view');

	}
	public function view() {
		
		$this->load->view('users_view');
		
	}
	
	public function viewUsers() {

		$this->load->model('Crud_model');
		$records = $this->Crud_model->getUsers();
		$this->load->view('users_view', ['records' => $records]);
		
	}

	public function addStudent() {

		//validate  the data taken through the register form
		$this->form_validation->set_rules('stu_reg','Student RegNo','required|is_unique[users.stu_reg]');
		$this->form_validation->set_rules('stu_name','Student Name','required|is_unique[users.stu_name]');
		$this->form_validation->set_rules('stu_uni','University','required');

		if ($this->form_validation->run() == TRUE) {

			//load the model to connect to the db
			$this->load->model('Crud_model');
			$this->Crud_model->insertUser();

			//set message to be shown when registration is completed
			 $this->session->set_flashdata('success','Student is added');
			redirect('Crud');

		} else {

			$this->load->view('crud_view');
		}
	
	}


	public function editUser($stu_id) {

		$this->load->model('Crud_model');

		if (isset($_POST['update'])) {

			if ($this->Crud_model->update($stu_id)) {

				$this->session->set_flashdata('success','Student is updated');
				redirect('Crud/editUser/'.$stu_id , 'refresh');	

			} else {
				$this->session->set_flashdata('error','Student is not updated');
				redirect('Crud/editUser/'.$stu_id , 'refresh');	
			}
		}

		$data['row'] = $this->Crud_model->edit($stu_id);
		$this->load->view('edit_user',$data);
		
	}

	public function deleteUser($stu_id) {

		$this->load->model('Crud_model');
		$this->Crud_model->delete($stu_id);
		redirect('Crud' , 'refresh');	

	}


	

}
