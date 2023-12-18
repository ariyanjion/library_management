<?php
namespace App\Models;

use CodeIgniter\Model;
class Student_search extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'students';
    protected $primaryKey       = 'student_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'student_id', 'SID', 'student_name', 'email', 'mobile', 'password', 'status', 'reg_date', 'updation_date'
    ];
    function getdata($SID){
        $db= \config\Database::connect();
        $builder = $this->table('students');
        $builder->select('*');
        $builder->where('SID',$SID);

        $query=$builder->get();

        return $query->getResultArray();
    }

}
?>