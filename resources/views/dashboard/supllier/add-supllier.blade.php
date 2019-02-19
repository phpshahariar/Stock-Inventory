@extends('dashboard.master');
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Supllier <small>New Supplier Information Here</small></h1>
        <!-- end page-header -->
    <form class="form-horizontal" action="{{ url('/new-supllier') }}" method="post">
        @csrf
        <div class="well">
            <div class="form-group">
                <label  class="col-sm-5 control-label">Supllier Name</label>
                <div class="col-sm-5">
                    <input name="supllier_name" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('supllier_name') ? $errors->first('supllier_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Supllier Number</label>
                <div class="col-sm-5">
                    <input name="supllier_number" type="number" class="form-control">
                    <span style="color: red"> {{ $errors->has('supllier_number') ? $errors->first('supllier_number') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Supllier Address</label>
                <div class="col-sm-5">
                    <textarea class="form-control" name="supllier_address"></textarea>
                    <span style="color: red"> {{ $errors->has('supllier_address') ? $errors->first('supllier_address') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Business Start Date</label>
                <div class="col-sm-5">
                    <input name="start_date" type="datetime-local" class="form-control">
                    <span style="color: red"> {{ $errors->has('start_date') ? $errors->first('start_date') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">State</label>
                <div class="col-sm-5">
                    <select class="form-control" name="city_area">
                        <option>---Select State---</option>
                        <option value="dhaka">Dhaka</option>
                        <option value="rangpur">Rangpur</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="sylhet">Sylhet</option>
                        <option value="khulna">Khulna</option>
                        <option value="barishal">Barishal</option>
                        <option value="maymansing">Maymansing</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-5">
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Add Supllier</button>
                </div>
            </div>
        </div>
    </form>
    </div>

@endsection