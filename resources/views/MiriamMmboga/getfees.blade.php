@extends('layouts.app')
@section('content')

    <table class="table table-bordered">
      <tr>
            <th>ID</th>
            <th>Student ID</th>
            <th>Date of Payment</th>
            <th>Amount</th>
      </tr>

    @foreach($fees as $f)
    <tr>
        <td>{{$f['id']}}</td>
        <td>{{$f['student_id']}}</td>
        <td>{{$f['DOP']}}</td>
        <td>{{$f['amount']}}</td>

    </tr>
    @endforeach

      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>{{$total_fees}}</td>

      </tr>
</table>

@stop