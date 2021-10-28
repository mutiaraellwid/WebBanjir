<?php

namespace App\Controllers;
use App\Models\DataModel;

class Layout extends BaseController
{
    protected $dataModel;
    public function __construct()
    {
        $this->dataModel = new DataModel();
    }
    public function body()
    {
    $data = array(
        'chart' => $this->dataModel->db->table('DataBanjir')->get()->getResultArray()
    );
    echo view('Station1/chart', $data);
}
}