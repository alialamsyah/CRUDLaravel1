<?php

    namespace App\Models\Larahub;
    use Illuminate\Support\Facades\DB;

    class JawabanModel{
        public static function get_all($id){
            $answers = DB::table('answers')->where('pertanyaan_id', $id)->get();
            return $answers;
        }
        public static function get_asks($id){
            $asks = DB::table('asks')->where('id', $id)->get();
            return $asks;
        }
        public static function save($data, $id){
            $new_answers = DB::table('answers')->insert($data);
            return $new_answers;
        }
    }