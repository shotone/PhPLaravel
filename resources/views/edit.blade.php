<div>
    <form method="post" enctype="multipart/form-data" action="{{route('update', $employee->id)}}">
        <div class="box-body">

            <div class="form-group">
                <label for="exampleInputEmail1">Post Text</label>
                <input type="text" class="form-control" placeholder="post text" name="name" value="{{ old('name', $employee->name) }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Post Text</label>
                <input type="text" class="form-control" placeholder="post text" name="username" value="{{ old('username', $employee->username) }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Post Text</label>
                <input type="text" class="form-control" placeholder="post text" name="position" value="{{ old('position', $employee->position) }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Post Text</label>
                <input type="text" class="form-control" placeholder="post text" name="phone" value="{{ old('phone', $employee->phone) }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Post Text</label>
                <input type="text" class="form-control" placeholder="post text" name="is_hired" value="{{ old('is_hired', $employee->is_hired) }}">
            </div>

        </div>
        <input type="hidden" name="_token" id='csrf_toKen' value="{{ csrf_toKen() }}">
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{url ('employees')}}">მთავარზე დაბრუნება</a>
        </div>
    </form>
</div>
