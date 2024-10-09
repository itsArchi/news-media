@extends('admin.layout')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Panel Admin</h4>
          <p class="card-description">
            Add Category or News below!
          </p>
          <div>
            <a href="/admin/category/"><button type="button" class="btn btn-primary btn-rounded btn-fw">+ Add Category</button></a>
            <a href="/admin/news/"><button type="button" class="btn btn-primary btn-rounded btn-fw">+ Add News</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection