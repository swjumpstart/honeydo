<?php namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model {
	protected $table = 'task';
	protected $returnType = '\App\Entities\Task';

}
