<?php

namespace App\Controllers;
use App\Models\DataModel;

class Station1 extends BaseController
{
    protected $dataModel;
    public function __construct()
    {
        $this->dataModel = new DataModel();
    }
    public function dashboard()
	{
        $dashboard = new dataModel();
        $data = [
            'chart' => $this->dataModel->db->table('DataBanjir')->get()->getResultArray(),
            'dashboard' => $dashboard->findAll()
        ];
        echo view('Station1/dashboard', $data);
	}
    public function chart()
	{
	if(isset($_GET['min']) && isset($_GET['max'])) {
		$chart = $this->dataModel->db->table('DataBanjir')->where('DATE(DateTime) >=', $_GET['min'])
			->where('DATE(DateTime) <=', $_GET['max'])->orderBy('DateTime','DESC')->get()->getResultArray();
	} else {
            	$chart = $this->dataModel->db->table('DataBanjir')->limit(10)->orderBy('DateTime','DESC')->get()->getResultArray();
	}
        $data = array(
            'chart' => $chart
        );
        echo view('Station1/chart', $data);
	}
    public function field()
	{
        $field = $this->dataModel->findAll();
        $data = [
            'chart' => $this->dataModel->db->table('DataBanjir')->get()->getResultArray(),
            'field' => $field
        ];
        echo view('Station1/field', $data);
	}
    public function tables()
	{
        $data = [
            'chart' => $this->dataModel->db->table('DataBanjir')->get()->getResultArray(),
            'data' => $this->dataModel->paginate(5, 'DB_Banjir'),
            'pager' => $this->dataModel->pager
        ];
        echo view('Station1/tables', $data);
	}
    public function download()
	{
        $tables = $this->dataModel->findAll();
        $data = [
            'tables' => $tables,
            'data' => $this->dataModel->paginate(8, 'DB_Banjir'),
            'pager' => $this->dataModel->pager
        ];
        echo view('Station1/download', $data);
	}
}