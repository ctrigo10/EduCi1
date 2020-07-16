<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    //Tipo de retorno array u object
    //protected $returnType     = 'array';
    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'password', 'email'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}