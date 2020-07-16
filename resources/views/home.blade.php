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

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    @if(Auth::user()->id == 1)
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header">User Profile</div>
                </div>
            </div>
            <div class="col-md-2">
                <a href="/posts/create" class="btn mt-1 btn-primary">Create</a>
                <a href="/" class="btn mt-1 btn-success">View</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header">User Experience</div>
                </div>
            </div>
            <div class="col-md-2">
                <a href="/skills/create" class="btn mt-1 btn-primary">Create</a>
                <a href="/" class="btn mt-1 btn-success">View</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header">User Projects</div>
                </div>
            </div>
            <div class="col-md-2">
                <a href="/projects/create" class="btn mt-1 btn-primary">Create</a>
                <a href="{{route('projects.index')}}" class="btn mt-1 btn-success">View</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header">Company Overview</div>
                </div>
            </div>
            <div class="col-md-2">
                <a href="{{route('items.create')}}" class="btn mt-1 btn-primary">Create</a>
                <a href="/" class="btn mt-1 btn-success">View</a>
            </div>
        </div>
    @endif
</div>
@endsection
