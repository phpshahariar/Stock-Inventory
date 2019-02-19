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
                                <th>Code</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Image One</th>
                                <th>Image Two</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;?>
                            @foreach($products as $product)
                                <tr class="odd gradeX">
                                    <td>{!! $i++ !!}</td>
                                    <td>{!! $product->code !!}</td>
                                    <td>{!! $product->name !!}</td>
                                    <td>{!! $product->category->category_name !!}</td>
                                    <td>{!! $product->brand->brand_name !!}</td>
                                    <td>
                                        <img src="{!! asset('image-ones/'.$product->img_one) !!}" height="100" width="100" alt="image One"/>
                                    </td>
                                    <td>
                                        <img src="{!! asset('image-twos/'.$product->img_two) !!}" height="100" width="100" alt="image Two"/>
                                    </td>
                                    <td>{!! $product->color !!}</td>
                                    <td>{!! $product->size !!}</td>
                                    <td>{!! $product->stock ==1 ? 'Stock' : 'Out Of Stock'!!}</td>
                                    <td>
                                        @if($product->stock == 1)
                                            <a href="{{url('/stock-product/'.$product->id)}}" name="btn" class="btn btn-xs btn-success" title="Stock">
                                                <span class="glyphicon glyphicon-ok-sign"></span>
                                            </a>
                                        @else
                                            <a href="{{url('/out-stock-product/'.$product->id)}}" name="btn" class="btn btn-xs btn-warning" title="Out Stock">
                                                <span class="glyphicon glyphicon-remove-sign"></span>
                                            </a>
                                        @endif
                                        <a href="{{url('/edit-product/'.$product->id)}}" name="btn" class="btn btn-xs btn-info" title="Edit">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{url('/delete-product/'.$product->id)}}" name="btn" class="btn btn-xs btn-danger" title="Delete" onclick="return confirm ('Are You Sure Delete This!')">
                                            <span class="glyphicon glyphicon-trash"></span>
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