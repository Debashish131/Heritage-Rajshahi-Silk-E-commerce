@extends('admin.master')

@section('maincontent')


    <table class="table dataTable" id="datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Amount</th>
            <th scope="col">Address</th>
            <th scope="col">Status</th>
            <th scope="col">Transaction ID</th>
            <th scope="col">Id creation Time</th>

        </tr>
        </thead>
        <tbody>
        @foreach($payment as $val)
            <tr>
                <th scope="row">{{$val->id}}</th>
                <td>{{$val->name}}</td>
                <td>{{$val->email}}</td>
                <td>{{$val->phone}}</td>
                <td>{{$val->amount}}</td>
                <td>{{$val->address}}</td>
                <td>{{$val->status}}</td>
                <td>{{$val->transaction_id}}</td>
                <td>{{\Carbon\Carbon::parse($val['created_at'])->diffForHumans() }}</td>
                </td>
        @endforeach
        </tbody>
    </table>
@endsection


