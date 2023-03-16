@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif



                        Hello Admin!
                        <ul>
                            <li>Name : {{ Auth::user()->name }}</li>
                            <li>Email : {{ Auth::user()->email }}</li>
                            <li>Role : {{ Auth::user()->type }}</li>
                            <li>Created at : {{ Auth::user()->created_at }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
