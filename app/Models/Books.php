<?php

namespace App\Models;

use CodeIgniter\Model;

class Books extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'books';
    protected $primaryKey       = 'books_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'books_id', 'book_name', 'category', 'author', 'ISBN', 'price', 'img'
    ];
    public function countRows()
    {
        return $this->countAllResults();
    }
 
}
