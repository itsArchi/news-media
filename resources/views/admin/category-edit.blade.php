@extends('admin.layout')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Default form</h4>
          <p class="card-description">
            Basic form layout
          </p>
          <form class="forms-sample" action="/admin/category/update/{{ $data->id }}" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputUsername1">Category Name</label>
              <input type="text" value="{{ $data->name_category }}" class="form-control" name="name_category" placeholder="Name">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection