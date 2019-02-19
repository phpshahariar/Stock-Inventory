@extends('dashboard.master');
@section('content')
    <br/>
    <div class="invoice col-md-6 col-md-offset-4">
        <div class="invoice-company">
                    <span class="pull-right hidden-print">
                    <a href="{!! url('/manage-supllier') !!}" class="btn btn-sm btn-success m-b-10"><i class="fa fa-backward m-r-5"></i>Back</a>
                    </span>
            {!! $suplliers->supllier_name !!}
        </div>

        <div class="invoice-header">
            <div class="invoice-to">
                <address class="m-t-5 m-b-5">
                    <strong>{!! $suplliers->supllier_number !!}</strong><br />
                    <em>Supllier Address : </em>{!! $suplliers->supllier_address !!}<br />
                    <em>Business Start : </em>{!! $suplliers->start_date !!}<br />
                    <em>Supllier Area : </em>{!! $suplliers->city_area !!}<br />
                </address>
            </div>
        </div>
    </div>
@endsection