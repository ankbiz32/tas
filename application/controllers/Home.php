<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}

	public function index()
	{
		$slides=$this->fetch->getInfo('hero_slider');
		$projects=$this->fetch->getInfo('projects');
		$prods=$this->fetch->getInfoByLim('products',4);
		$services=$this->fetch->getInfoByLim('services',4);
		$events=$this->fetch->getInfoByOrder('events');
		$gallery=$this->fetch->getInfoByOrder('gallery');
		$states=$this->fetch->getInfo('states');
		$roles=$this->fetch->getInfo('reg_roles');
		$gallery_count=$this->fetch->record_count('gallery');
		if($gallery_count>6){
			$gallery_count=6;
		}
		$feedbacks=$this->fetch->getInfoByOrder('feedbacks');
		$web=$this->fetch->getWebProfile('webprofile');

		$this->load->view('header',['title'=>'Home','slides'=>$slides,
						'events'=>$events,
						'projects'=>$projects,
						'roles'=>$roles,
						'prods'=>$prods,
						'services'=>$services,
						'states'=>$states,
						'gallery'=>$gallery,
						'web'=>$web,
						'feedbacks'=>$feedbacks,
						'lim'=> $gallery_count
						]
					);
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function About()
	{
		$web=$this->fetch->getWebProfile('webprofile');
		$prods=$this->fetch->getInfoByLim('products',4);
		$services=$this->fetch->getInfoByLim('services',4);
		$states=$this->fetch->getInfo('states');
		$roles=$this->fetch->getInfo('reg_roles');
		$this->load->view('header',['title'=>'About Us',
									'roles'=>$roles,
									'states'=>$states,
									'prods'=>$prods,
									'services'=>$services,
									'web'=>$web
									]);
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function Services()
	{
		$web=$this->fetch->getWebProfile('webprofile');
		$prods=$this->fetch->getInfoByLim('products',4);
		$services=$this->fetch->getInfoByLim('services',4);
		$states=$this->fetch->getInfo('states');
		$roles=$this->fetch->getInfo('reg_roles');
		$servicesAll=$this->fetch->getInfo('services');
		$this->load->view('header',['title'=>'About Us',
									'roles'=>$roles,
									'states'=>$states,
									'prods'=>$prods,
									'services'=>$services,
									'servicesAll'=>$servicesAll,
									'web'=>$web
									]);
		$this->load->view('services');
		$this->load->view('footer');
	}

	public function Products()
	{
		$web=$this->fetch->getWebProfile('webprofile');
		$prods=$this->fetch->getInfoByLim('products',4);
		$services=$this->fetch->getInfoByLim('services',4);
		$productsAll=$this->fetch->getInfo('products');
		$states=$this->fetch->getInfo('states');
		$roles=$this->fetch->getInfo('reg_roles');
		$this->load->view('header',['title'=>'About Us',
									'roles'=>$roles,
									'states'=>$states,
									'prods'=>$prods,
									'productsAll'=>$productsAll,
									'services'=>$services,
									'web'=>$web
									]);
		$this->load->view('products');
		$this->load->view('footer');
	}

	public function Media()
	{
		$gallery=$this->fetch->getInfo('gallery');
		$prods=$this->fetch->getInfoByLim('products',4);
		$services=$this->fetch->getInfoByLim('services',4);
		$web=$this->fetch->getWebProfile('webprofile');
		$states=$this->fetch->getInfo('states');
		$roles=$this->fetch->getInfo('reg_roles');
		$this->load->view('header',['title'=>'Media galery',
									'roles'=>$roles,
									'gallery'=>$gallery,
									'states'=>$states,
									'prods'=>$prods,
									'services'=>$services,
									'web'=>$web
									]);
		$this->load->view('media');
		$this->load->view('footer');
	}

	public function Projects()
	{
		$projects=$this->fetch->getInfoByOrder('projects');
		$prods=$this->fetch->getInfoByLim('products',4);
		$services=$this->fetch->getInfoByLim('services',4);
		$states=$this->fetch->getInfo('states');
		$roles=$this->fetch->getInfo('reg_roles');
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'Projects',
									'roles'=>$roles,
									'states'=>$states,
									'projects'=>$projects,
									'prods'=>$prods,
									'services'=>$services,
									'web'=>$web
									]);
		$this->load->view('projects');
		$this->load->view('footer');
	}

	public function Project($id)
	{
		$project=$this->fetch->getInfoById($id,'projects');
		$prods=$this->fetch->getInfoByLim('products',4);
		$services=$this->fetch->getInfoByLim('services',4);
		$states=$this->fetch->getInfo('states');
		$roles=$this->fetch->getInfo('reg_roles');
		$recents=$this->fetch->getInfoByLim('projects',4);
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'Project',
									'roles'=>$roles,
									'states'=>$states,
									'project'=>$project,
									'recents'=>$recents,
									'prods'=>$prods,
									'services'=>$services,
									'web'=>$web
									]);
		$this->load->view('project');
		$this->load->view('footer');
	}

	public function Events()
	{
		$events=$this->fetch->getInfoByOrder('events');
		$prods=$this->fetch->getInfoByLim('products',4);
		$services=$this->fetch->getInfoByLim('services',4);
		$states=$this->fetch->getInfo('states');
		$roles=$this->fetch->getInfo('reg_roles');
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'Events',
									'roles'=>$roles,
									'states'=>$states,
									'events'=>$events,
									'prods'=>$prods,
									'services'=>$services,
									'web'=>$web
									]);
		$this->load->view('events');
		$this->load->view('footer');
	}

	public function Event($id)
	{
		$event=$this->fetch->getInfoById($id,'events');
		$prods=$this->fetch->getInfoByLim('products',4);
		$services=$this->fetch->getInfoByLim('services',4);
		$social_meta='';
		if(!empty($event)){
			$social_meta='
				<meta name="og:title" content="'.$event->heading.'">
				<meta name="og:description" content="'.substr(trim(strip_tags($event->descr)),0,100).'">
				<meta name="og:image" content="'.base_url("assets/images/").$event->img_src.'">
				<meta name="og:url" content="'.base_url().'">
				<meta name="og:site_name" content="Total Agrisolutions by Ramraj services Pvt. Ltd.">

				<meta name="twitter:card" content="summary">
				<meta name="twitter:title" content="'.$event->heading.'">
				<meta name="twitter:description" content="'.substr(trim(strip_tags($event->descr)),0,100).'">
				<meta name="twitter:site" content="@'.base_url().'">
				<meta name="twitter:image" content="'.base_url("assets/images/").$event->img_src.'">

				<meta itemprop="name" content="'.$event->heading.'">
				<meta itemprop="description" content="'.substr(trim(strip_tags($event->descr)),0,100).'">
				<meta itemprop="image" content="'.base_url("assets/images/").$event->img_src.'">
			';
			}
		$states=$this->fetch->getInfo('states');
		$roles=$this->fetch->getInfo('reg_roles');
		$recents=$this->fetch->getInfoByLim('events',4);
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'Event',
									'roles'=>$roles,
									'states'=>$states,
									'event'=>$event,
									'prods'=>$prods,
									'services'=>$services,
									'recents'=>$recents,
									'social_meta'=>$social_meta,
									'web'=>$web
									]);
		$this->load->view('event');
		$this->load->view('footer');
	}

	public function Privacy()
	{
		$web=$this->fetch->getWebProfile('webprofile');
		$prods=$this->fetch->getInfoByLim('products',4);
		$services=$this->fetch->getInfoByLim('services',4);
		$states=$this->fetch->getInfo('states');
		$roles=$this->fetch->getInfo('reg_roles');
		$this->load->view('header',['title'=>'Privacy Policy',
									'roles'=>$roles,
									'states'=>$states,
									'prods'=>$prods,
									'services'=>$services,
									'web'=>$web
									]);
		$this->load->view('policies');
		$this->load->view('footer');
	}

	
	public function PartnerReg()
	{
		$this->form_validation->set_rules('pname', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[10]|max_length[10]|regex_match[/^[0-9]{10}$/]');
		if($this->form_validation->run() == true){
			$data=$this->input->post();
			$data['date']=date('Y-m-d');
			$this->load->model('AddModel','save');
			$status= $this->save->saveInfo($data, 'partner_reg');
			if($status){
				$this->session->set_flashdata('success','Thank you for registering ! We will contact you soon.' );
				redirect('Home');
			}
			else{
				$this->session->set_flashdata('failed','Error !');
				redirect('Home');
			}
		}
		else{
			$this->session->set_flashdata('failed',strip_tags(trim(validation_errors())));
			redirect('Home');
		} 
	}
	
	public function FarmerReg()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[10]|max_length[10]|regex_match[/^[0-9]{10}$/]');
		if($this->form_validation->run() == true){
			$data=$this->input->post();
			$data['date']=date('Y-m-d');
			$this->load->model('AddModel','save');
			$status= $this->save->saveInfo($data, 'farmer_reg');
			if($status){
				$this->session->set_flashdata('success','Thank you for registering ! We will contact you soon.' );
				redirect('Home');
			}
			else{
				$this->session->set_flashdata('failed','Error !');
				redirect('Home');
			}
		}
		else{
			$this->session->set_flashdata('failed',strip_tags(trim(validation_errors())));
			redirect('Home');
		} 
	}

	public function getCity(){
		$postData = $this->input->post();
		$data = $this->fetch->getInfoType('cities','state_id',$postData['state']);
		echo json_encode($data); 
	}
}
