@extends('admin.layout')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">News</h4>
          <p class="card-description">
            News Today!
          </p>
          <div>
            <a href="/admin/news/input"><button type="button" class="btn btn-primary btn-rounded btn-fw">+ Add News</button></a>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>
                    ID
                  </th>
                  <th>
                    News Title
                  </th>
                  <th>
                    News Category
                  </th>
                  <th>
                    Is Headline
                  </th>
                  <th>
                    Is Featured News
                  </th>
                  <th>
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $news)
                <tr>
                  <td class="py-1">
                    {{$news->id}}
                  </td>
                  <td>
                    {{$news->news_title}}
                  </td>
                  <td class="py-1">
                    {{$news->name_category}}
                  </td>
                  <td>
                    @if ($news->is_headline == "no")
                      <a href="/admin/news/set-headline/yes/{{$news->id}}">
                        <button type="button" class="btn btn-secondary btn-sm">Set Headline</button>
                      </a>
                    @else
                      <a href="/admin/news/set-headline/no/{{$news->id}}">
                        <button type="button" class="btn btn-success btn-sm">Unset Headline</button>
                      </a>
                    @endif
                  </td>
                  <td>
                    @if ($news->featured_news == "no")
                      <a href="/admin/news/set-featured-news/yes/{{$news->id}}">
                        <button type="button" class="btn btn-secondary btn-sm">Set Featured News</button>
                      </a>
                    @else
                      <a href="/admin/news/set-featured-news/no/{{$news->id}}">
                        <button type="button" class="btn btn-success btn-sm">Unset Featured News</button>
                      </a>
                    @endif
                  </td>
                  <td>
                    <a href="/admin/news/edit/{{$news->id}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                    <a href="/admin/news/delete/{{$news->id}}"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
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