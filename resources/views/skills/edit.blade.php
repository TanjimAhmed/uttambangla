@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Edit Work Experience</h1>
        <form action="{{ route('skills.update',$skill->id) }}" enctype="multipart/form-data" method="POST">
        @method('PUT')
        @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="company_name">Company</label>
                    <input type="text" class="form-control" value="{{ old('company_name') ?? $skill->company_name }}" name="company_name" placeholder="Company Name"/>
                    <div class="">{{$errors->first('company_name')}}</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="from">Period From</label>
                    <input type="text" class="form-control" value="{{ old('from') ?? $skill->from }}" name="from" placeholder="From"/>
                    <div class="">{{$errors->first('from')}}</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="From">to</label>
                    <input type="text" class="form-control" value="{{ old('to') ?? $skill->to }}" name="to" placeholder="To"/>
                    <div class="">{{$errors->first('to')}}</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="department">Departmet</label>
                    <input type="text" class="form-control" value="{{ old('department') ?? $skill->department }}" name="department" placeholder="Department"/>
                    <div class="">{{$errors->first('department')}}</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" value="{{ old('location') ?? $skill->location }}" name="location" placeholder="Location"/>
                    <div class="">{{$errors->first('location')}}</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="position">Position</label>
                    <input type="text" class="form-control" value="{{ old('position') ?? $skill->position }}" name="position" placeholder="Position"/>
                </div>
                <div class="form-group col-md-12">
                    <label for="duty">Responsibilities</label>
                    <textarea class="form-control" name="duty" cols="30" rows="10" placeholder="Responsibilities">{{ old('duty') ?? $skill->duty }}</textarea>
                    <div class="">{{$errors->first('duty')}}</div>
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
