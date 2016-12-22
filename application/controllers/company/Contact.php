<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load('template');
		$this->template->show("company", "addContact");
	}

	public function login()
	{
		$data = file_get_contents("php://input");
 		$postData = json_decode($data);
 		//print_r($postData);
		$responseData = $this->MainModel->select_entry('company', 'id, companyEmail', array('companyEmail' => $postData->companyEmail, 'companyPassword' => md5($postData->companyPassword)));
		if(!empty($responseData))
		{
			$companyId = $responseData->id;
			$companyEmail = $responseData->companyEmail;
			if($companyId) 
	 		{
	 			$this->session->set_userdata('companyId', $companyId);
	 			$this->session->set_userdata('companyEmail', $companyEmail);
	 			echo true;
	 		}
		}

		
 		else echo false;
	}
	
	public function addContact()
	{
		$data = file_get_contents("php://input");
		$postData = json_decode($data);
		$postData->createdDate = date('Y-m-d H:i:s');
		$postData->status = 1;
		$postData->companyId = 1;
		
		//Fetch City Id
		$where = array('name' => $postData->city);
		$cityId =  $this->MainModel->select_row('city', 'id', $where);
		$postData->city = $cityId->id;
		
		//Fetch Source Type Id
		$where = array('source' => $postData->sourceType, 'companyId' => $postData->companyId);
		$sourceTypeId =  $this->MainModel->select_row('sourceType', 'id', $where);
		$postData->sourceType = $sourceTypeId->id;
		
		//Fetch RM Id
		$where = array('name' => $postData->RM, 'companyId' => $postData->companyId);
		$RMId =  $this->MainModel->select_row('employee', 'id', $where);
		$postData->RM = $RMId->id;
		
		//Fetch ARM Id
		$where = array('name' => $postData->ARM, 'companyId' => $postData->companyId);
		$ARMId =  $this->MainModel->select_row('employee', 'id', $where);
		$postData->ARM = $ARMId->id;
		
		//Fetch Product Id
		$where = array('product' => $postData->product, 'companyId' => $postData->companyId);
		$productId =  $this->MainModel->select_row('product', 'id', $where);
		$postData->product = $productId->id;
		
		//Fetch Notify Id
		$where = array('name' => $postData->notify, 'companyId' => $postData->companyId);
		$notifyId =  $this->MainModel->select_row('employee', 'id', $where);
		$postData->notify = $notifyId->id;
		
		
		$this->MainModel->insert_entry('contact', $postData);
 		echo true;
	}
	
	public function addCity()
	{
		$data = file_get_contents("php://input");
		$postData = json_decode($data);
		$where = array('name'=>$postData->name);
		$responseData = $this->MainModel->select_row('city', 'id', $where);
		if(empty($responseData))
		{
			$where = array('name'=>$postData->stateId);
			$responseData = $this->MainModel->select_row('state', 'id', $where);
			$postData->stateId = $responseData->id;
			$postData->createdDate = date('Y-m-d H:i:s');
			$postData->status = 1;
			$this->MainModel->insert_entry('city', $postData);
			echo true;
		}
		else {
			echo false;
		}
		
	}
	
	public function fetchState()
	{
		$where = array('status'=>1);
		$responseData = $this->MainModel->select_entry('state', 'id, name', $where);
		echo json_encode($responseData);
	}
	
	public function fetchCity()
	{
		$where = array('status'=>1);
		$responseData = $this->MainModel->select_entry('city', 'id, name', $where);
		echo json_encode($responseData);	
	}
	
	public function fetchSourceType()
	{
		$where = array('status'=>1);
		$responseData = $this->MainModel->select_entry('sourceType', 'id, source', $where);
		echo json_encode($responseData);	
	}
	
	public function fetchRM()
	{
		$where = array('designation'=>'RM', 'status'=>1);
		$responseData = $this->MainModel->select_entry('employee', 'id, name', $where);
		echo json_encode($responseData);	
	}
	
	public function fetchARM()
	{
		$where = array('designation'=>'ARM', 'status'=>1);
		$responseData = $this->MainModel->select_entry('employee', 'id, name', $where);
		echo json_encode($responseData);	
	}

	public function fetchProduct()
	{
		$where = array('status'=>1);
		$responseData = $this->MainModel->select_entry('product', 'id, product', $where);
		echo json_encode($responseData);	
	}
	
	public function fetchNotify()
	{
		$where = array('status'=>1);
		$responseData = $this->MainModel->select_entry('employee', 'id, name', $where);
		echo json_encode($responseData);	
	}
}
