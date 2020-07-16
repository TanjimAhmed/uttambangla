@extends('layouts.master')
@section('content')


<div class="container">
    <h1>Projects</h1>
    <h3>
        <a class="btn btn-success my-2" href="{{ route('projects.create') }}" target="_blank"> Create New </a>
    </h3>
    <div class="row">
        @foreach ($projects as $project)
        <div class="col-md-4">
            <label for="title">{{$project->article}}</label>
            <div class="card my-2">
                <img src="<?php echo asset("storage/project_images/$project->project_image")?>" class="card-img-top" alt="" style="width: 300px;">
                <div class="card-body" style="width: 300px;">
                    <form action="{{ route('projects.destroy',$project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('projects.edit', $project->id)}}" class="btn btn-primary" target="_blank">
                            Edit
                        </a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <h5 class="card-header">{{$project->title}}</h5>
                    <p class="card-text"> <span style="text-align:center;">{{$project->body}}</span> </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
