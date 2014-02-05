<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->model('admin_model');
		$this->load->library('javascript');
		if($this->input->post('search_books')!=''){
			$filter = $this->input->post('filter');
			$type = $this->input->post('type');
			$access = $this->input->post('access');
			$avail = $this->input->post('avail');
			$word = $this->input->post('search');

			$data['sql2'] = $this->admin_model->search($filter,$type,$word,$access,$avail);
			$this->load->view('admin/admin_search',$data);

		}else{
			$data['sql2'] = $this->admin_model->viewAll();
			$this->load->view('admin/admin_search',$data);
		}
	}
	
	public function update()
	{
		$this->load->model('admin_model');
		$data['title'] = "Edit Books";
		$name = $this->input->get('flag', TRUE);
		$data['result'] = $this->admin_model->get_book_info($name);
		$this->load->view('admin/view_update',$data);
	}
	public function update_page( $data )
	{	
		$this->load->model('admin_model');
		$data = $this->input->post(NULL, TRUE);
		$this->admin_model->book_update($data);
		$this->index();
		
	}
	public function delete()
	{	
		$this->load->model('admin_model');
		$data['materialid'] = $this->input->get('flag', TRUE);
		$this->admin_model->book_delete($data);
		$this->index();
		
	}
	
	public function add_material() {
		$this->load->view('admin/add_material_view');
		$this->load->model('admin_model');
		if($this->input->post('insert') != ''){
			
			$materialid = $this->input->post('materialid');
			$course = $this->input->post('course');
			$type = $this->input->post('type');
			$name = $this->input->post('name');
			$year = $this->input->post('year');
			$edvol = $this->input->post('edvol');
			$access = $this->input->post('access');
			$available = $this->input->post('available');
			$requirement = $this->input->post('requirement');

			$fname = $this->input->post('fname');
			$mname = $this->input->post('mname');
			$lname = $this->input->post('lname');
			
			$data_libmaterial = array(
				'materialid' => $materialid,
				'course' => $course,
				'type' => $type,
				'name' => $name,
				'year' => $year,
				'edvol' => $edvol,
				'access' => $access,
				'available' => $available,
				'requirement' => $requirement,
			);
			
			$this->admin_model->insert_material($data_libmaterial);
			
			$data_author = array(
				'materialid' => $materialid,
				'fname' => $fname,
				'mname' => $mname,
				'lname' => $lname,
			);
			$this->admin_model->insert_author($data_author);
			
		}
	}
	
}