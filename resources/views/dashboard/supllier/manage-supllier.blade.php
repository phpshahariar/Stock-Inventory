@extends('dashboard.master');
@section('content')

    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="javascript:;">Dashboard</a></li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Supllier Tables</h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-12 -->
            <div class="col-lg-12">
                <!-- begin panel -->
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Supllier Data Sheet</h4>
                    </div>
                    <div class="panel-body">
                        <table id="data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>SN NO</th>
                                <th>Supllier Name</th>
                                <th>Supllier Number</th>
                                <th>Supllier Address</th>
                                <th>Business Start Date</th>
                                <th>Statet</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;?>
                            @foreach($suplliers as $supllier)
                                <tr class="odd gradeX">
                                    <td>{!! $i++ !!}</td>
                                    <td>{!! $supllier->supllier_name !!}</td>
                                    <td>{!! $supllier->supllier_number !!}</td>
                                    <td>{!! $supllier->supllier_address !!}</td>
                                    <td>{!! $supllier->start_date !!}</td>
                                    <td>{!! $supllier->city_area !!}</td>
                                    <td>
                                        <a href="{{url('/edit-supllier/'.$supllier->id)}}" name="btn" class="btn btn-xs btn-info" title="Edit">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{url('/delete-supllier/'.$supllier->id)}}" name="btn" class="btn btn-xs btn-danger" title="Delete" onclick="return confirm ('Are You Sure Delete This!')">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                        <a href="{{url('/view-supllier/'.$supllier->id)}}" name="btn" class="btn btn-xs btn-primary" title="View">
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