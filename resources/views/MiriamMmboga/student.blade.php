@extends('layouts.app')
@section('content')
    
    <div class="container">
        <form action="{{url('/storeStudent')}}" method="POST">
            
        {{ csrf_field() }}       
             Add A New Student
            <div class="form-group">
        First name
            <input type="text" name="first_name"/>
        </div>

        <div class="form-group">
        Last name
            <input type="text" name="last_name"/>
        </div>

        <div class="form-group">
        Date of Birth
            <input type="date" name="DOB"/>
        </div>

        <div class="form-group">
        Address
            <input type="text" name="address"/>
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

    <a href="view-students" class="btn btn-primary">Display All Students</a>
        
    </div>

@stop