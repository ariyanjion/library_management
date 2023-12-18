<?php

namespace App\Models;

use CodeIgniter\Model;

class Author extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'author';
    protected $primaryKey       = 'author_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'author_id', 'author_name', 'creation_date', 
    ];
    public function countRows()
    {
        return $this->countAllResults();
    }
    

}
