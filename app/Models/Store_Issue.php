<?php

namespace App\Models;

use CodeIgniter\Model;

class Store_Issue extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'issue';
    protected $primaryKey       = 'issue_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'issue_id', 'student_name', 'book_name', 'issue_date', 'return_date', 'return_status', 'fine','ISBN'
    ];
    public function countRows()
    {
        return $this->countAllResults();
    }

   
}
