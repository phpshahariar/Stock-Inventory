@extends('dashboard.master');
@section('content')
    <br/>
    <form class="form-horizontal" action="{{ url('/new-brand') }}" method="post">
        @csrf
        <div class="well">
            <div class="form-group">
                <label  class="col-sm-5 control-label">Brand Name</label>
                <div class="col-sm-5">
                    <input name="brand_name" type="text" class="form-control">
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
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Add Brand</button>
                </div>
            </div>
        </div>
    </form>
@endsection