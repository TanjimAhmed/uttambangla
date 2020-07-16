@extends('layouts.master')
@section('content')
    <div class="container">
        <h1 class="display-3">Edit Company Information</h1>
        <form action="{{ route('items.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Company Name</label>
                    <input class="form-control" type="text" name="name" value="{{ old('name') ?? $item->name }}" placeholder="Company Name" >
                    <div class="">{{$errors->first('company_name')}}</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="location">Company Location</label>
                    <input class="form-control" type="text" name="location" value="{{ old('location') ?? $item->location }}" placeholder="Company Location" >
                    <div class="">{{$errors->first('location')}}</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="work">Disciplines</label>
                    <input class="form-control" type="text" name="work" value="{{ old('work') ?? $item->work }}" placeholder="Disciplines" >
                    <div class="">{{$errors->first('work')}}</div>
                </div>
                <div class="form-group col-md-12">
                    <label for="duty">Company Description</label>
                    <textarea class="form-control" type="text" name="duty" id="" cols="30" rows="10" placeholder="Company Description">{{ old('duty') ?? $item->duty }}</textarea>
                    <div class="">{{$errors->first('duty')}}</div>
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
