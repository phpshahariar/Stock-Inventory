@extends('dashboard.master');
@section('content')
    <br/>
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="javascript:;">Tables</a></li>
            <li class="active">Managed Tables</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Managed Tables</h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-12 -->
            <div class="col-md-12">
                <!-- begin panel -->
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Buyer Data Sheet</h4>
                    </div>
                    <div class="panel-body">
                        <table id="data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>SN NO</th>
                                <th>Buyer Name</th>
                                <th>Contact Number</th>
                                <th>Contact Address</th>
                                <th>Total Cost</th>
                                <th>Paid Cost</th>
                                <th>Due Cost</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;?>
                            @foreach($buyers as $buyer)
                            <tr class="odd gradeX">
                                <td>{!! $i++ !!}</td>
                                <td>{!! $buyer->buyer_name !!}</td>
                                <td>{!! $buyer->contact_number !!}</td>
                                <td>{!! $buyer->contact_address !!}</td>
                                <td>{!! $buyer->total_cost !!}</td>
                                <td>{!! $buyer->paid_cost !!}</td>
                                <td>{!! $buyer->due_cost !!}</td>
                                <td>{!! $buyer->payment_status == 0 ?  'Paid' : 'Unpaid' !!}</td>
                                <td>
                                    @if($buyer->payment_status == 0)
                                        <a href="{{url('/paid-payment/'.$buyer->id)}}" name="btn" class="btn btn-xs btn-success" title="Paid">
                                            <span class="glyphicon glyphicon-ok-sign"></span>
                                        </a>
                                        @else
                                        <a href="{{url('/unpaid-payment/'.$buyer->id)}}" name="btn" class="btn btn-xs btn-warning" title="Unpaid">
                                            <span class="glyphicon glyphicon-remove-sign"></span>
                                        </a>
                                    @endif
                                        <a href="{{url('/edit-info/'.$buyer->id)}}" name="btn" class="btn btn-xs btn-info" title="Edit">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{url('/delete-info/'.$buyer->id)}}" name="btn" class="btn btn-xs btn-danger" title="Delete" onclick="return confirm ('Are You Sure Delete This!')">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                        <a href="{{url('/view-info/'.$buyer->id)}}" name="btn" class="btn btn-xs btn-primary" title="View">
                                            <span class="glyphicon glyphicon-zoom-in"></span>
                                        </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    @endsection