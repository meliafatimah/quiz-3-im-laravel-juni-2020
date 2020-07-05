<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;

class ArtikelController extends Controller
{
    public function create(){
        return view('artikel.form');
    }

    public function store(Request $request) {
        $new_artikel = ArticleModel::save($request->all());

        return redirect('/artikel');
    }

    public function index() {
        $artikel = ArticleModel::get_all();

        return view('artikel.index', compact('artikel'));
    }

    public function show($id) {
        $artikel = ArticleModel::find_by_id($id);
        //dd($artikel);
        return view('artikel.show', compact('artikel'));
    }

    public function edit($id) {
        $artikel = ArticleModel::find_by_id($id);
        return view('artikel.edit', compact('artikel'));
    }

    public function update($id, Request $request) {
        $artikel = ArticleModel::update($id, $request->all());
        return redirect('/artikel');
    }

    public function destroy($id) {
        $destroy = ArticleModel::destroy($id);
        return redirect('/artikel');
    }
}
