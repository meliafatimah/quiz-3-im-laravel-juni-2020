<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArticleModel {
    public static function get_all(){
        $article = DB::table('articles')->get();
        return $article;
    }
    public static function save($data){
        unset($data["_token"]);
        $new_article = DB::table('articles')->insert($data);
        return $new_article;
    }
    public static function find_by_id($id) {
        $article = DB::table('articles')->get()->where('id', $id);
        return $article;
    }
    public static function update($id, $request) {
        //dd($request);
        $article = DB::table('articles')
                    ->where('id', $id)
                    ->update(
                        ['judul' => $request["judul"],
                        'isi' => $request["isi"],
                        'slug' => $request["slug"],
                        'tag' => $request["tag"],
                        'user_id' => $request["user_id"]
                        ]
                    );
        return $article;
    }

    public static function destroy($id) {
        $destroy = DB::table('articles')
                    ->where('id', $id)
                    ->delete();
        return $destroy;
    }
}

