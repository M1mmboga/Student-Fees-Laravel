@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{url('/storeFees')}}" method="POST">
{{ csrf_field() }}       

            Add Fees Payment

            <div class="form-group">
            Student ID
            <input type="number" name="student_id"/>
            </div>

            <div class="form-group">
            Amount in Kshs
            <input type="number" name="amount"/>
            </div>

           <div class="form-group">
           Date of Payment
            <input type="date" name="DOP"/>
           </div>
       
           <div class="form-group">
           <input type="submit" name="Submit" class="btn btn-primary">

           </div>

        <!-- error message -->
           @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif


        <!-- success message -->
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        </form>

        <hr>
        
        <a href="view-fees" class="btn btn-primary">Display All Fees</a>

        <hr>

        <div>
        Check student Fees
        <form action="/search" method="GET">
        {{ csrf_field() }}

         <div class="form-group">
         Enter Student ID
            <input type="search" name="search">
         </div>

         <div class="form-group">
             <input type="submit" name="Search" class="btn btn-primary">
         </div>
        </form>

    </div>
</div>

    
    @stop