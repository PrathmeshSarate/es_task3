<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function saveform()
	{
		$rows = array();
		$qualis = $this->input->post('quali');
		$uni_boards = $this->input->post('uni_board');
		$departments = $this->input->post('department');
		$percentages = $this->input->post('percentage');
		$u_id= rand(111,999);
		
		foreach($qualis as $index => $quali){
			
			$quali = $qualis[$index];
			$uni_board = $uni_boards[$index];
			$department = $departments[$index];
			$percentage = $percentages[$index];

			if(!empty($quali) || !empty($uni_board) || !empty($department) || !empty($percentage))
			{
				$rows[] = array(
					'u_id' => $u_id,
					'qualification' => $quali,
					'uni_board' => $uni_board,
					'department' => $department,
					'percentage' => $percentage
				);
			}		
		}
		// echo "<pre>";
		// print_r($rows);
		// exit();
			
		
		$response=$this->GetDetail->save_quali($rows);
		
		if($response==TRUE)
		{
			redirect(base_url());
		}
		else
		{
			?>
			<script>
				alert('FAILED');
			</script>

			<?php
		}


	}

	public function get_update_id()
	{
		$id = $this->input->post('id');
		$result['data']=$this->GetDetail->get_by_id($id);  		
		$this->load->view('read',$result);			
	}

	public function read()
	{
		$result_set['details']=$this->GetDetail->fetch();
    	$this->load->view('read',$result_set);
	}
}
