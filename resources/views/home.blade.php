@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! Proceed to: <br>


                    <div>
                        <ul>
                            <li><a href="/student">Student</a></li>
                            <li><a href="/fees">Fees</a></li>

                        </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
