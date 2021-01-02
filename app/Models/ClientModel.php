<?php 

namespace App\Models;
use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table = 'clients';
    
    protected $returnType = 'object';

    //protected $allowedFields = ['name', 'observation'];
}