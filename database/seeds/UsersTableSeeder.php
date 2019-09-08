<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $users = $users = [
                    'Moussa.SOW@canal-plus.com',
                    'Souleymane.NIANG@canal-plus.com',
                    'Sebastien.PUNTURELLO@canal-plus.com',
                    'Ella.DOMINGO@canal-plus.com',
                    'NdeyeDiakho.FALL@canal-plus.com',
                    'Harane.GATEILLER@canal-plus.com',
                    'KhadidiatouBocar.THIAM@canal-plus.com',
                    'Maimouna.TOUNKARA@canal-plus.com',
                    'FatouDime.TOURE@canal-plus.com',
                    'Diary.AMADOU@canal-plus.com',
                    'Mareime.SY@canal-plus.com',
                    'YayeKhady.SISSOKHO@canal-plus.com',
                    'Jacques.DIOH@canal-plus.com',
                    'KHADIDIATOUNENEDIO.DIALLO@canal-plus.com',
                    'NdeyeKhadidiatouGueye.SYLLA@canal-plus.com',
                    'Julienne.GOMIS@canal-plus.com',
                    'Seynabou.TALLA@canal-plus.com',
                    'Souleye.DIEDHIOU@canal-plus.com',
                    'Salif.NGOM@canal-plus.com',
                    'AissatouCisse.SOUMARE@canal-plus.com',
                    'HALATOUSY.MOREIRA@canal-plus.com',
                    'Doua.BALDE@canal-plus.com',
                    'Aissatou.BALDE@canal-plus.com',
                    'Gladys.GOUDJO@canal-plus.com',
                    'Fatima.DIENG@canal-plus.com',
                    'Fatou.SOW@canal-plus.com',
                    'Khadidjatou.KANE@canal-plus.com',
                    'Brahim.BOUGALEB@canal-plus.com',
                    'Ousseynou.NIANG@canal-plus.com',
                    'YayeLaye.SAMB@canal-plus.com',
                    'Aminata.NDIAYE@canal-plus.com',
                    'Lalaina.BARIVOLA@canal-plus.com',
                    'Sylvert.ANICET@canal-plus.com',
                    'Augustin.DIEME@canal-plus.com',
                    'AbietouZalia.DIEME@canal-plus.com',
                    'FatelSow.BA@canal-plus.com',
                    'Mariama.COULIBALY@canal-plus.com',
                    'AminataBerthe.DIOP@canal-plus.com',
            ];

            foreach ($users as $u) {
                // DB::table('users')->insert([
                //     'name' => $u,
                //     'email' => $u,
                //     'password' => bcrypt('passer123'),
                // ]);
            }
    }
}
