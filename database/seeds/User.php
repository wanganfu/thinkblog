<?php

use think\migration\Seeder;

class User extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $rows = [];
        for ($i = 0; $i < 20; $i++) {
            $rows[] = [
                'username' => $faker->userName,
                'password' => md5('123456'),
                'email' => $faker->email,
                'status' => 2
            ];
        }

        $rows[0]['username'] = 'annon';
        $rows[0]['status'] = 1;
        $rows[0]['email'] = '1435427137@qq.com';
        $this->table('user')->insert($rows)->save();
    }
}