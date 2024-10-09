@extends('admin.layout')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add News</h4>
          <p class="card-description">
            Form Add News
          </p>
          <form class="forms-sample" action="/admin/news/save" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="">News Title</label>
              <input type="text" class="form-control" name="news_title" placeholder="Title">
            </div>
            <div class="form-group">
              <label for="">News Content</label>
              <input type="text" class="form-control" name="news_content" placeholder="Content">
            </div>
            <div class="form-group">
              <label for="">News Content</label>
              <select name="news_category" id="" class="form-control">
                @foreach ($list_category as $category)
                  <option value="{{$category->id}}">{{$category->name_category}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="">Image Content</label>
              <input type="file" class="form-control" name="image" placeholder="Content">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection