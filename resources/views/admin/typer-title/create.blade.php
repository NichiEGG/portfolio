@extends('admin.layouts.layout')


@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Typer Title</h1>
    </div>

    <div class="section-body">
      <form action="{{route('admin.typer-title.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
       
        <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Create Title</h4>
            </div>
            <div class="card-body">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" name="title" class="form-control" value="">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button class="btn btn-primary">Create</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </form>
    </div>
  </section>

@endsection