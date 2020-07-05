@extends('layouts.master')

@section('content')
    <div>
        <div>
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Buat artikel baru kalian!</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/artikel" method="POST">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="judul">Judul</label>
                      <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Artikel">
                    </div>
                    <div class="form-group">
                      <label for="isi">Isi</label>
                      <input type="text" class="form-control" id="isi" name="isi" placeholder="Isi Artikel">
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Jika judul : Artikel Terbaru, slug : artikel-terbaru">
                      </div>
                      <div class="form-group">
                        <label for="tag">Tag</label>
                        <input type="text" class="form-control" id="tag" name="tag" placeholder="hashtag">
                      </div>
                      <div class="form-group">
                        <label for="user_id">User_ID</label>
                        <input type="text" class="form-control" id="user_id" name="user_id" placeholder="ID User">
                      </div>
                  </div>
                  <!-- /.card-body -->
    
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
        </div>
    </div>
@endsection