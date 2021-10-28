<?php

namespace App\Controllers;
use App\Models\DataModel2;

class Station2 extends BaseController
{
    protected $dataModel2;
    public function __construct()
    {
        $this->dataModel2 = new DataModel2();
    }
    public function dashboards()
	{
        $dashboard = new dataModel2();
        $data = [
            'chart' => $this->dataModel2->db->table('DataBanjir2')->get()->getResultArray(),
            'dashboard' => $dashboard->findAll()
        ];
        echo view('Station2/dashboards', $data);
	}
    public function chart()
	{
	if(isset($_GET['min']) && isset($_GET['max'])) {
		$chart = $this->dataModel2->db->table('DataBanjir2')->where('DATE(DateTime) >=', $_GET['min'])
			->where('DATE(DateTime) <=', $_GET['max'])->orderBy('DateTime','DESC')->get()->getResultArray();
	} else {
            	$chart = $this->dataModel2->db->table('DataBanjir2')->limit(10)->orderBy('DateTime','DESC')->get()->getResultArray();
	}
        $data = array(
            'chart' => $chart
        );
        echo view('Station2/chart', $data);
	}
    public function field()
	{
        $field = $this->dataModel2->findAll();
        $data = [
            'chart' => $this->dataModel2->db->table('DataBanjir2')->get()->getResultArray(),
            'field' => $field
        ];
        echo view('Station2/field', $data);
	}
    public function tables()
	{
        $data = [
           /** 'chart' => $this->dataModel2->db->table('DataBanjir2')->get()->getResultArray(),*/
           'data' => $this->dataModel2->paginate(5, 'DB_Banjir'),
           'pager' => $this->dataModel2->pager,
           'chart' => $this->dataModel2->getData()
        ];
        echo view('Station2/tables', $data);
	}
    public function download()
	{
        $tables = $this->dataModel2->findAll();
        $data = [
            'tables' => $tables,
            'data' => $this->dataModel2->paginate(8, 'DB_Banjir'),
            'pager' => $this->dataModel2->pager,
        ];
        echo view('Station2/download', $data);
	}
}
