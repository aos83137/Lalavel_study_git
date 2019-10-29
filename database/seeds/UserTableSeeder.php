<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // App\User::create([
        //     'name'=>sprintf('%s %s', Str::random(3), Str::random(4)),
        //     //str_random()이거 헬퍼 함수인데 6.0에는 없음
        //     'email'=>Str::random(10) . '@example.com',
        //     'password' => bcrypt('password'),
        // ]);

        factory(App\User::class, 5)->create();
        //이걸로 만들면 로그인을 못하느느 진짜 그냥 더미임
        //그래서 밑에를 봐라
        //php artisan make::factory 모델명 Factory --model=모델명
        //database/factories/모델명Factory.; 생성됨

        //php artisan make:factory UserFactory --model=User

    
    }
}
