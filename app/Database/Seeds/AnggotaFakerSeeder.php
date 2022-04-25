<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class AnggotaFakerSeeder extends Seeder
{
 public function run()
 {
    $faker = \Faker\Factory::create('id_ID');
    for ($i = 0; $i < 200; $i++) {
    $jk = $faker->randomElement(['pria', 'wanita']);
    if ($jk == "pria") {
    $gender = "male";
    } else {
    $gender = "female";
    }
    $data = [
    'nama' => $faker->name($gender),
    'tempat_lahir' => $faker->cityName,
    'tanggal_lahir' => $faker->date('Y-m-d', 'now'),
    'email' => $faker->email,
    'jenis_kelamin' => $jk,
    'no_telp' => $faker->phoneNumber,
    'alamat' => $faker->address,
    'created_at' => Time::now()
    ];
    $this->db->table('tb_anggota')->insert($data);
    }
 }
}
