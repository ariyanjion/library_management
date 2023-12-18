<?php
namespace App\Models;

use CodeIgniter\Model;
class Book_search extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'books';
    protected $primaryKey       = 'books_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'books_id', 'book_name', 'category','author', 'ISBN', 'price', 'img'
    ];
    function getdata($ISBN){
        $db= \config\Database::connect();
        $builder = $this->table('books');
        $builder->select('*');
        $builder->where('ISBN',$ISBN);

        $query=$builder->get();

        return $query->getResultArray();
    }

}
?>