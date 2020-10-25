
<div>
    <form method="post" enctype="multipart/form-data" action="{{route('posts.update', $post->id)}}">
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Post Title</label>
                <input type="name" class="form-control" placeholder="title" name="title" value="{{ old('title', $post->title) }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Post Text</label>
                <input type="name" class="form-control" placeholder="post text" name="post_text" value="{{ old('post_text', $post->post_text) }}">
            </div>

        </div>
        <input type="hidden" name="_token" id='csrf_toKen' value="{{ csrf_toKen() }}">
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
