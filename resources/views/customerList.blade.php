@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Kunden</div>
                <div class="panel-body">
                    @foreach($customers as $customer)
                        <h4>{{ $customer->name }}</h4>
                        <p>{{ $customer->lastname }}</p>
                        <p><strong>{{ number_format($customer->zipcode) }}€</strong></p>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
