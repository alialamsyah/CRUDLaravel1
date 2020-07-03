<?php

    namespace App\Models\Larahub;
    use Illuminate\Support\Facades\DB;

    class PertanyaanModel{
        public static function get_all(){
            $asks = DB::table('asks')->get();
            return $asks;
        }
        public static function save($data){
            $new_ask = DB::table('asks')->insert($data);
            return $new_ask;
        }
    }