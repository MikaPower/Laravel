<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert(['name' => 'Pedido Enviado']);
        DB::table('states')->insert(['name' => 'Pedido Recebido']);
        DB::table('states')->insert(['name' => 'Pedido em Progresso']);
        DB::table('states')->insert(['name' => 'Pedido Realizado']);
        DB::table('states')->insert(['name' => 'Pedido Apagado']);
    }
}
