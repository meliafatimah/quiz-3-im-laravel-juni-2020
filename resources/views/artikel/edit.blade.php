@extends('layouts.master')

@section('content')
    <div>
        <div>
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit artikel baru kalian!</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form role="form" action="/artikel/{{$artikel[0]->id}}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                    <div class="form-group">
                      <label for="judul">Judul</label>
                      <input type="text" class="form-control" id="judul" value="{{$artikel[0]->judul}}" name="judul" placeholder="Judul Artikel">
                    </div>
                    <div class="form-group">
                      <label for="isi">Isi</label>
                      <input type="text" class="form-control" id="isi" value="{{$artikel[0]->isi}}" name="isi" placeholder="Isi Artikel">
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" value="{{$artikel[0]->slug}}" name="slug" placeholder="Jika judul : Artikel Terbaru, slug : artikel-terbaru">
                      </div>
                      <div class="form-group">
                        <label for="tag">Tag</label>
                        <input type="text" class="form-control" id="tag" value="{{$artikel[0]->tag}}" name="tag" placeholder="hashtag">
                      </div>
                      <div class="form-group">
                        <label for="user_id">User_ID</label>
                        <input type="text" class="form-control" id="user_id" value="{{$artikel[0]->user_id}}" name="user_id" placeholder="ID User">
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