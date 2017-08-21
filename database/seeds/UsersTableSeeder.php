<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\User::class)->create([
            'name'   => 'Jorge',
            'surname'=> 'Peralta',
            'cedula'    => '12345678',
            'celular'   => '98653214',
            'email'     => 'peralta.jorge.uatf@gmail.com',
            'tipo'      => 'administrator',
            'cargo'     => 'server',
            'entidad'   => 'uatf',
            'password'  => 'admin',
            'active'    => true,

            ]);
        factory(App\User::class)->create([
            'name'      => 'Percy',
            'surname'   => 'Fuentes',
            'cedula'    => '11223344',
            'celular'   => '12345679',
            'email'     => 'percy.uatf@gmail.com',
            'tipo'      => 'director',
            'cargo'     => 'web',
            'entidad'   => 'uatf',
            'password'  => 'admin',
            'active'    => true,
            'insertador'=> 'Jorge Peralta',
            ]);
        factory(App\User::class)->create([
            'name'      => 'Edgar',
            'surname'   => 'Arce',
            'cedula'    => '22334455',
            'celular'   => '12345689',
            'email'     => 'edgar.uatf@gmail.com',
            'tipo'      => 'supervisor',
            'cargo'     => 'automotores',
            'entidad'   => 'uatf',
            'password'  => 'admin',
            'active'    => true,
            'insertador'=> 'Jorge Peralta',
            ]);
        factory(App\User::class)->create([
            'name'      => 'Diego',
            'surname'   => 'Condori',
            'cedula'    => '33445566',
            'celular'   => '12345789',
            'email'     => 'diego.uatf@gmail.com',
            'tipo'      => 'supervisor',
            'cargo'     => 'mecanico',
            'entidad'   => 'uatf',
            'password'  => 'admin',
            'active'    => true,
            'insertador'=> 'Jorge Peralta',
            ]);
        factory(App\User::class)->create([
            'name'      => 'Alfredo',
            'surname'   => 'Pinto Doctor',
            'cedula'    => '44556677',
            'celular'   => '12346789',
            'email'     => 'doctor.uatf@gmail.com',
            'tipo'      => 'personal',
            'cargo'     => 'conductor',
            'entidad'   => 'uatf',
            'password'  => 'admin',
            'active'    => true,
            'insertador'=> 'Jorge Peralta',
            ]);
        factory(App\User::class)->create([
            'name'      => 'Lic. Lechugas',
            'surname'   => 'Pinto',
            'cedula'    => '55667788',
            'celular'   => '12356789',
            'email'     => 'lecguhas.uatf@gmail.com',
            'tipo'      => 'personal',
            'cargo'     => 'responsable',
            'entidad'   => 'uatf',
            'password'  => 'admin',
            'active'    => true,
            'insertador'=> 'Jorge Peralta',
            ]);
        factory(App\User::class)->create([
            'name'      => 'Henry',
            'surname'   => 'Balcazar',
            'cedula'    => '66778899',
            'celular'   => '12456789',
            'email'     => 'henry.uatf@gmail.com',
            'tipo'      => 'personal',
            'cargo'     => 'mensajero',
            'entidad'   => 'uatf',
            'password'  => 'admin',
            'active'    => true,
            'insertador'=> 'Jorge Peralta',
            ]);
        factory(App\User::class)->create([
            'name'      => 'Nancy',
            'surname'   => 'Valdivia',
            'cedula'    => '77889911',
            'celular'   => '13456789',
            'email'     => 'nancy.uatf@gmail.com',
            'tipo'      => 'personal',
            'cargo'     => 'secretaria',
            'entidad'   => 'uatf',
            'password'  => 'admin',
            'active'    => true,
            'insertador'=> 'Jorge Peralta',
            ]);
        factory(App\User::class, 41)->create();
    }
}
