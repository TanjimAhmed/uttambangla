@extends('layouts.master')
@section('content')
<div class="container">
    <h1 class="display-3">Edit Project</h1>
    <div class="row">
        <form action="{{route('projects.update', $project->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group col-md-12">
                <label for="title">Title</label>
                <input type="text" class="form-control" value="{{ old('title') ?? $project->title }}" name="title" placeholder="title">
                <div class="">{{$errors->first('title')}}</div>
            </div>
            <div class="form-group col-md-12">
                <label for="body">Description</label>
                <textarea type="text" class="form-control" cols="10" rows="10" value="{{ old('title') ?? $project->body }}" name="body" placeholder="Description">{{ old('body') ?? $project->body}}</textarea>
                <div class="">{{$errors->first('body')}}</div>
            </div>
            <div class="form-group col-md-3">
                <label for="article">Options</label>
                <select id="article" name="article" class="form-control">
                    <option value="" disabled>Choose...</option>
                    <option value="1" {{$project->article == '1' ? 'selected' : ''}}>article</option>
                    <option value="2" {{$project->article == '2' ? 'selected' : ''}}>presentation</option>
                    <option value="3" {{$project->article == '3' ? 'selected' : ''}}>conference</option>
                </select>
              </div>
            <div class="form-group col-md-12">
                <label for="project_image">Insert Picture</label>
                <input type="file" name="project_image" class="form-control-file">
                <div class="">{{$errors->first('project_image')}}</div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
