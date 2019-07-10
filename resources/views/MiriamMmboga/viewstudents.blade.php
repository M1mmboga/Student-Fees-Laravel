@extends('layouts.app')
@section('content')

<div>
       <h3>Student Data</h3>

       <table class="table table-bordered">
       
       <tr>
           <th>ID</th>
           <th>FirstName</th>
           <th>LastName</th>
           <th>DOB</th>
           <th>Address</th>
       </tr>

     @foreach($student as $row)
     <tr>
         <td>{{$row['id']}}</td>
         <td>{{$row['first_name']}}</td>
         <td>{{$row['last_name']}}</td>
         <td>{{$row['DOB']}}</td>
         <td>{{$row['address']}}</td>
     </tr>
     @endforeach
       </table>
    </div>

@stop