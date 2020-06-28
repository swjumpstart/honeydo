<?php namespace App\Database\Seeds;

	use CodeIgniter\Database\Seeder;
	use Faker\Factory;

	class TaskSeeder extends Seeder
	{
		public function run()
		{
			$faker = Factory::create();
			for($i = 0; $i < 100; $i++)
			{
				$data = [];
				$data['description'] = $faker->text;
				$this->db
					->table('task')
					->insert($data);
			}
		}
	}
