<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$model = model('TaskModel');
		$tasks = $model->findAll();
		$data =  ['tasks' => $tasks];

		return view('welcome_message', $data);
	}

	//--------------------------------------------------------------------

}
