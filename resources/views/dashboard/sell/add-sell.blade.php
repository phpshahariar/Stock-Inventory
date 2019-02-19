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
        <h1 class="page-header">Dashboard <small>header small text goes here...</small></h1>
        <!-- end page-header -->


        <div class="row">
            <div class="col-md-8">
                <form class="form-horizontal" action="{{ url('/new-sell') }}" method="post">
                    @csrf
                    <div class="well">
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">Name</label>
                            <div class="col-sm-8">
                                <input name="name" type="text" class="form-control">
                                <span style="color: red"> {{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">Phone</label>
                            <div class="col-sm-8">
                                <input name="phone" type="number" class="form-control">
                                <span style="color: red"> {{ $errors->has('code') ? $errors->first('code') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">Address</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="address"></textarea>
                                <span style="color: red"> {{ $errors->has('code') ? $errors->first('code') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">Product</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="product_id" id="getProduct">
                                    <option>--Select Sell Product--</option>
                                    @foreach($sellProducts as $sellProduct)
                                        <option value="{!! $sellProduct->id !!}">{!! $sellProduct->name !!}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">Quentity</label>
                            <div class="col-sm-8">
                                <input name="quentity" type="text" class="form-control">
                                <span style="color: red"> {{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">Sell Amount</label>
                            <div class="col-sm-8">
                                <input name="amount" type="number" class="form-control">
                                <span style="color: red"> {{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">Due Amount</label>
                            <div class="col-sm-8">
                                <input name="due_amount" type="number" class="form-control">
                                <span style="color: red"> {{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">Date</label>
                            <div class="col-sm-8">
                                <input name="date" type="date" class="form-control">
                                <span style="color: red"> {{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" name="btn" class="btn btn-block btn-primary">Product Sell</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="well">
                <div class="table-responsive">
                    <div class="showProduct"></div>
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('page_js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#getProduct").on("change", function(){
            var productID = this.value;
            productInfo(productID);
        });

        function productInfo(productID) {
            $.ajax({
                url:"{!! url('get-product') !!}/" + productID,
                type:'POST',
                data:{id:productID},
                success: function(data){
                    $(".showProduct").html(data);
                    console.log(data);
                }
            });
        }
    </script>
@endsection