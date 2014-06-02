<?php 

class tasks extends CI_Controller {


	public function index(){
		$data = array();

		if ( $query = $this->tasks_model->get_tasks() ) {
			$data['tasks'] = $query;
		}
		$this->load->view('includes/header');
		$this->load->view('tasks', $data);
		$this->load->view('includes/footer'); 
	}

	public function create(){
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content')
		);
		$this->tasks_model->add_task($data);

		$this->index();
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$this->tasks_model->delete_task($id);
		$this->index();
	}

	public function update(){
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content')
		);
	}




}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */