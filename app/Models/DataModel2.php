<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel2 extends Model
{
    protected $table      = 'DataBanjir2';
    protected $primaryKey = 'ID';
    protected $returnType = 'array';
    // protected $table      = 'DataBanjir';
    // protected $primaryKey = 'ID';

    public function getData()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('DataBanjir2');
        return $builder->get()->getResultArray();
    }

}
