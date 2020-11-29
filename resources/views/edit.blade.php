@extends('layout.layout')
@section('content')
    <div class="container" align="center" style="margin: 120px 0">
        <form  method="post" enctype="multipart/form-data" action="{{route('posts.update',$movie->id)}}">
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Movie Title</label>
                    <input type="name" class="form-control" name="title" value="{{old('title',$movie->title)}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Movie Year</label>
                    <input type="name" class="form-control" name="post" value="{{old('post_text',$movie->year)}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tags</label>
                    <select name="tags[]" id="" multiple>
                        @foreach($post->tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @csrf
            {{--        <input type="hidden" name="_token"  id='csrf_toKen' value="{{ csrf_toKen() }}">--}}
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
