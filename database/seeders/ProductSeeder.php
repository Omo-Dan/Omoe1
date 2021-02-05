<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'Oppo',
            'price'=>'250',
            'description'=>"A smartphone with 8gbram & much more feautures",
            'category'=>'mobile',
            "gallery"=>"https://www.google.com/url?sa=i&url=http%3A%2F%2Fwww.gametroniq.com%2Fproduct%2Foppo-f9%2F&psig=AOvVaw26nFVOT2XuxxIlibap0dWM&ust=1612536572788000&source=images&cd=vfe&ved=2ahUKEwjCvJH-vNDuAhUs-YUKHeYXDcUQr4kDegUIARDuAQ"
            ],
            [
                'name'=>'Dell TV',
                'price'=>'400',
                'description'=>"A Smart Tv with much more feautures",
                'category'=>'Tv',
                "gallery"=>"https://i.dell.com/sites/imagecontent/products/PublishingImages/snp/5914.jpg"
                ],
                [
                    'name'=>'Huawei',
                    'price'=>'200',
                    'description'=>"A smartphone with much more feautures",
                    'category'=>'mobile',
                    "gallery"=>"https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/17/070433/1.jpg?6128"
                    ],
                    [
                        'name'=>'Huawei',
                        'price'=>'200',
                        'description'=>"A smartphone with much more feautures",
                        'category'=>'mobile',
                        "gallery"=>"https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/17/070433/1.jpg?6128"
                        ],
                        [
                            'name'=>'Huawei',
                            'price'=>'200',
                            'description'=>"A smartphone with much more feautures",
                            'category'=>'mobile',
                            "gallery"=>"https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/17/070433/1.jpg?6128"
                            ],
        ]);
    }
}
