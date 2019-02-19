@extends('dashboard.master');
@section('content')
    <br/>
    <form id="editCategoryForm" class="form-horizontal" action="{{ url('/update-category') }}" method="post">
        @csrf
        <div class="well">
            <div class="form-group">
                <label  class="col-sm-5 control-label">Category Name</label>
                <div class="col-sm-5">
                    <input name="category_name" value="{!! $categories->category_name !!}" type="text" class="form-control">
                    <input name="category_id" value="{!! $categories->id !!}" type="hidden" class="form-control">
                    <span style="color: red"> {{ $errors->has('category_name') ? $errors->first('category_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Category Status</label>
                <div class="col-sm-5">
                    <select class="form-control" name="category_status">
                        <option>---Select Category Status---</option>
                        <option value="1">Stock Available</option>
                        <option value="0">Out Of Stock</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-5">
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Update Category</button>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.forms['editCategoryForm'].elements['category_status'].value="{!! $categories->category_status !!}";
    </script>
@endsection