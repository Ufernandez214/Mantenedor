<?php 
	/**
	 * 
	 */
	class DashboardModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function selectUsuariosActivos()
		{
			$sql = "SELECT COUNT(status) AS Activos FROM persona WHERE status='1' GROUP BY status";
			$request = $this->select_count($sql);
			return $request;
		}
		public function selectUsuariosTotales()
		{
			$sql = "SELECT COUNT(nombres) AS Totales FROM persona WHERE status <> '0'";
			$request = $this->select_count($sql);
			return $request;
		}
		public function selectUsuariosInactivos()
		{
			$sql = "SELECT COUNT(status) AS Inactivos FROM persona WHERE status='2' GROUP BY status";
			$request = $this->select_count($sql);
			return $request;
		}
	}
 ?>