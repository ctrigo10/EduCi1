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

    protected $allowedFields = ['username', 'password', 'email'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function ObtenerUsuarios(){
        $db = \config\Database::connect();
        $query = $db->query('select id,username,email from users;');
        $result = $query->getResult();
        return $result;
    }

    public function buscarUsuario($username, $password){
        $db = \config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id, username , password');
        $builder->where('username',$username);
        $builder->where('password',MD5($password));
        $builder->limit(1);
        $query = $builder->get();
        return $query->getRow();
    }
}