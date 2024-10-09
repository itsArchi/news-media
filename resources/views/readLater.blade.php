@extends('frontend.layout')

@section('content')
<div class="container">
    <h1 class="mb-5">Saved for Later</h1>

    @if($savedNews->isEmpty())
        <p>No news saved for later.</p>
    @else
        <div class="row">
            @foreach($savedNews as $item)
                <div class="col-md-4">
                    <div class="post-block-wrapper post-float clearfix">
                        <div class="post-thumbnail">
                            <a href="/detail/{{$item->news->id}}">
                                <img class="img-fluid" src="/image/{{$item->news->image}}" alt="post-thumbnail"/>
                            </a>
                        </div>

                        <div class="post-content mb-5">
                            <h2 class="post-title">
                                <a href="/detail/{{$item->news->id}}">{{$item->news->news_title}}</a>
                            </h2>
                            <div class="post-meta">
                                <span class="posted-time"><i class="fa fa-clock-o mr-2"></i>{{$item->news->created_at}}</span>
                            </div>
                            <!-- Tombol Hapus -->
                            <form action="{{ route('readlater.delete', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i> Remove
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
