<?php namespace App\Models;

use CodeIgniter\Model;

class EstudianteModel extends Model
{
    protected $table      = 'estudiantes';
    protected $primaryKey = 'id';

    //protected $returnType     = 'array';
    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['ci', 'nombre', 'apellido','direccion','telefono','fecha_nacimiento','cursos_id'];

    //protected $useTimestamps = false;
    //protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}