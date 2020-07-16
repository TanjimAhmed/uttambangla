@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Add New Work Experience</h1>
        <form action="{{ route('skills.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="company_name">Company</label>
                    <input type="text" class="form-control" value="{{ old('company_name')}}" name="company_name" placeholder="Company Name"/>
                    <div class="">{{$errors->first('company_name')}}</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="from">Period From</label>
                    <input type="text" class="form-control" value="{{ old('from')}}" name="from" placeholder="From"/>
                    <div class="">{{$errors->first('from')}}</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="From">to</label>
                    <input type="text" class="form-control" value="{{ old('to')}}" name="to" placeholder="To"/>
                    <div class="">{{$errors->first('to')}}</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="department">Departmet</label>
                    <input type="text" class="form-control" value="{{ old('department')}}" name="department" placeholder="Department"/>
                    <div class="">{{$errors->first('department')}}</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" value="{{ old('location')}}" name="location" placeholder="Location"/>
                    <div class="">{{$errors->first('location')}}</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="position">Position</label>
                    <input type="text" class="form-control" value="{{ old('position')}}" name="position" placeholder="Position"/>
                    <div class="">{{$errors->first('position')}}</div>
                </div>
                <div class="form-group col-md-12">
                    <label for="duty">Responsibilities</label>
                    <textarea class="form-control" value="" name="duty" cols="30" rows="10" placeholder="Responsibilities">{{ old('duty')}}</textarea>
                    <div class="">{{$errors->first('duty')}}</div>
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
