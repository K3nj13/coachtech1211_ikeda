<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Person::factory()->count(15)->create();
        // $param = [
        //     'last_name' => '田中',
        //     'first_name' => '一',
        //     'gender'=> '男性',
        //     'email' => 'tanaka@yahoo',
        //     'postcode' => '123-4567',
        //     'address' => '東京都',
        //     'building_name'=>'田中マンション101',
        //     'opinion' => 'laravel難しい、laravel難しい、laravel難しい、laravel難しい、laravel難しい、laravel難しい、laravel難しい',
        // ];
        // DB::table('People')->insert($param);

        // $param = [
        //     'last_name' => '鈴木',
        //     'first_name' => '二',
        //     'gender' => '男性',
        //     'email' => 'suzuki@yahoo',
        //     'postcode' => '234-5678',
        //     'address' => '神奈川県',
        //     'building_name'=>'鈴木ビル102',
        //     'opinion' => 'laravel楽しい、laravel楽しい、laravel楽しい、laravel楽しい、laravel楽しい、laravel楽しい、laravel楽しい',
        // ];
        // DB::table('People')->insert($param);

        // $param = [
        //     'last_name' => '佐藤',
        //     'first_name' => '三',
        //     'gender'=> '女性',
        //     'email' => 'satou@yahoo',
        //     'postcode' => '345-6789',
        //     'address' => '埼玉県',
        //     'building_name'=>'佐藤マンション103',
        //     'opinion' => 'laravel奥が深い、laravel奥が深い、laravel奥が深い、laravel奥が深い、laravel奥が深い、laravel奥が深い',
        // ];
        // DB::table('People')->insert($param);

        // $param = [
        //     'last_name' => '木村',
        //     'first_name' => '四',
        //     'gender' => '女性',
        //     'email' => 'kimura@yahoo',
        //     'postcode' => '456-7891',
        //     'address' => '群馬県',
        //     'building_name'=>'木村マンション104',
        //     'opinion' => 'laravel勉強、laravel勉強、laravel勉強、laravel勉強、laravel勉強、laravel勉強、laravel勉強、',
        // ];
        // DB::table('People')->insert($param);

    }
}
