<?php 

	class Dashboard extends Controllers{
		public function __construct()
		{
			parent::__construct();
			session_start();
			session_regenerate_id(true);
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
			getPermisos(1);
		}

		public function dashboard()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = " Dashboard";
			$data['page_title'] = " Dashboard";
			$data['page_name'] = "dashboard";
			$data['page_functions_js'] = "functions_dashboard.js";
			$this->views->getView($this,"dashboard",$data);
		}
		public function getUsuariosActivos()
		{
		 $arrData = $this->model->selectUsuariosActivos();
		 $array = array();
		 $array = ["Data" =>[
			 	"status" => "true",
			    "msg" => $arrData
		 	]
		];
		 echo json_encode($array);
		}
		public function getUsuariosTotales()
		{
		 $arrData = $this->model->selectUsuariosTotales();
		 $array = array();
		 $array = ["Data" =>[
			 	"status" => "true",
			    "msg" => $arrData
		 	]
		];
		 echo json_encode($array);
		}
		public function getUsuariosInactivos()
		{
		 $arrData = $this->model->selectUsuariosInactivos();
		 $array = array();
		 $array = ["Data" =>[
			 	"status" => "true",
			    "msg" => $arrData
		 	]
		];
		 echo json_encode($array);
		}
	}
 ?>