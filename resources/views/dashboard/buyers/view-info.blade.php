@extends('dashboard.master');
@section('content')
    <br/>
    <div class="invoice col-md-6 col-md-offset-4">
        <div class="invoice-company">
                    <span class="pull-right hidden-print">
                    <a href="{!! url('/manage-buyer') !!}" class="btn btn-sm btn-success m-b-10"><i class="fa fa-backward m-r-5"></i>Back</a>
                    </span>
            {!! $buyers->buyer_name !!}
        </div>

        <div class="invoice-header">
            <div class="invoice-to">
                <address class="m-t-5 m-b-5">
                    <strong>{!! $buyers->contact_number !!}</strong><br />
                    <em>Contact Address : </em>{!! $buyers->contact_address !!}<br />
                    <em>Total Cost : </em>{!! $buyers->total_cost !!}<br />
                    <em>Paid Cost : </em>{!! $buyers->paid_cost !!}<br />
                    <em>Unpaid Cost : </em>{!! $buyers->due_cost !!}<br/>
                    <em>Payment Status : </em>{!! $buyers->payment_status !!}
                </address>
            </div>
        </div>
    </div>
    @endsection