@extends('admin.layout')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Striped Table</h4>
          <p class="card-description">
            Add class <code>.table-striped</code>
          </p>
          <div>
            <a href="/admin/category/input"><button type="button" class="btn btn-primary btn-rounded btn-fw">+ Add Category</button></a>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>
                    ID
                  </th>
                  <th>
                    Category
                  </th>
                  <th>
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $category)
                <tr>
                  <td class="py-1">
                    {{$category->id}}
                  </td>
                  <td>
                    {{$category->name_category}}
                  </td>
                  <td>
                    <a href="/admin/category/edit/{{$category->id}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                    <a href="/admin/category/delete/{{$category->id}}"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection