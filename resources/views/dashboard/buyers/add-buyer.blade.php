@extends('dashboard.master');
@section('content')
    <br/>
    <form class="form-horizontal" action="{{ url('/new-buyer') }}" method="post">
        @csrf
        <div class="well">
            <div class="form-group">
                <label  class="col-sm-5 control-label">Buyer Name</label>
                <div class="col-sm-5">
                    <input name="buyer_name" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('buyer_name') ? $errors->first('buyer_name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Contact Number</label>
                <div class="col-sm-5">
                    <input name="contact_number" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('contact_number') ? $errors->first('contact_number') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-5 control-label">Contact Address</label>
                <div class="col-sm-5">
                    <textarea name="contact_address" class="form-control textarea"></textarea>
                    <span style="color: red"> {{ $errors->has('contact_address') ? $errors->first('contact_address') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Total Cost</label>
                <div class="col-sm-5">
                    <input name="total_cost" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('total_cost') ? $errors->first('total_cost') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Paid Cost</label>
                <div class="col-sm-5">
                    <input name="paid_cost" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('paid_cost') ? $errors->first('paid_cost') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Due Cost</label>
                <div class="col-sm-5">
                    <input name="due_cost" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('due_cost') ? $errors->first('due_cost') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Payment Status</label>
                <div class="col-sm-5">
                    <select class="form-control" name="payment_status">
                        <option>---Select Payment Status---</option>
                        <option value="0">Paid</option>
                        <option value="1">Unpaid</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-5">
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Add Buyer</button>
                </div>
            </div>
        </div>
    </form>
    @endsection