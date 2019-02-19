@extends('dashboard.master');
@section('content')
    <br/>
    <form id="editBrandForm" class="form-horizontal" action="{{ url('/update-brand') }}" method="post">
        @csrf
        <div class="well">
            <div class="form-group">
                <label  class="col-sm-5 control-label">Brand Name</label>
                <div class="col-sm-5">
                    <input name="brand_name" value="{!! $brands->brand_name !!}" type="text" class="form-control">
                    <input name="brand_id" value="{!! $brands->id !!}" type="hidden" class="form-control">
                    <span style="color: red"> {{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Brand Status</label>
                <div class="col-sm-5">
                    <select class="form-control" name="brand_status">
                        <option>---Select Brand Status---</option>
                        <option value="1">Stock Available</option>
                        <option value="0">Out Of Stock</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-5">
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Update Brand</button>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.forms['editBrandForm'].elements['brand_status'].value="{!! $brands->brand_status !!}";
    </script>
@endsection