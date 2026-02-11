<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Template extends MX_Controller 
{   
    
    function __construct(){
        parent::__construct();
        
    }
    public function layout1($data=array())
	{
        $data=array_merge($this->comp,$data);
	    $this->load->view('header',$data); 
		$this->load->view('navigation');
		$this->load->view('slider');
		$this->load->view('body');
		$this->load->view('footer');
	}
	
	public function layout2($data)
	{
	    $data=array_merge($this->comp,$data);
		$this->load->view('header',$data); 
		$this->load->view('navigation');
 		$this->load->view('body');
		$this->load->view('footer');
	}
	public function layout3($data)
	{
		$data=array_merge($this->comp,$data);
		$this->load->view('header_error',$data);
		$this->load->view('navigation');
		$this->load->view('body');
		$this->load->view('footer');
	}

	 function privacy()
	{
		  $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "template";
        $data['view_file'] = "privacy_policy";
        echo Modules::run('template/layout2', $data);
	}
	 function refund_cancellation()
	{
		  $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "template";
        $data['view_file'] = "refund_cancellation";
        echo Modules::run('template/layout2', $data);
	}
	public function terms_condition()
	{
		  $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "template";
        $data['view_file'] = "terms_condition";
        echo Modules::run('template/layout2', $data);
	}
	
}