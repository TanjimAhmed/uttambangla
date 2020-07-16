@extends('layouts.master')
@section('content')
<div class="container">
    <h1 class="display-3">Create Your Profile</h1>
    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="{{ old('name')}}" name="name" placeholder="Name"/>
                <div class="">{{$errors->first('name')}}</div>
            </div>
            <div class="form-group col-md-6">
                <label for="work">Profession</label>
                <input type="text" class="form-control" value="{{ old('work')}}" name="work" placeholder="Profession"/>
                <div class="">{{$errors->first('work')}}</div>
            </div>
            <div class="form-group col-md-6">
                <label for="education">Education</label>
                <input type="text" class="form-control" value="{{ old('education')}}" name="education" placeholder="Education"/>
                <div class="">{{$errors->first('education')}}</div>
            </div>
            <div class="form-group col-md-6">
                <label for="profile_image">Profile Picture</label>
                <input type="file" name="profile_image" class="form-control-file">
            </div>
            <div class="form-group col-md-12">
                <label for="company_name">Professional experience</label>
            </div>
            <div class="form-group col-md-6">
                <label for="company_name">Company Name</label>
                <input type="text" class="form-control" value="{{ old('company_name')}}" name="company_name" placeholder="Company Name"/>
                <div class="">{{$errors->first('company_name')}}</div>
            </div>
            <div class="form-group col-md-6">
                <label for="from">Period</label>
                <label for="from">From</label>
                <input type="text" class="form-control" value="{{ old('from')}}" name="from" placeholder="Date,Month,Year"/>
                <div class="">{{$errors->first('from')}}</div>
            </div>
            <div class="form-group col-md-6">
                <label for="to">To</label>
                <input type="text" class="form-control" value="{{ old('to')}}" name="to" placeholder="Date,Month,Year"/>
                <div class="">{{$errors->first('to')}}</div>
            </div>
            <div class="form-group col-md-6">
                <label for="department">Department Name</label>
                <input type="text" class="form-control" value="{{ old('department')}}" name="department" placeholder="Department Name"/>
                <div class="">{{$errors->first('department')}}</div>
            </div>
            <div class="form-group col-md-6">
                <label for="company_location">Company Location</label>
                <input type="text" class="form-control" value="{{ old('company_location')}}" name="company_location" placeholder="Company Location"/>
                <div class="">{{$errors->first('company_location')}}</div>
            </div>
            <div class="form-group col-md-6">
                <label for="position">Position</label>
                <input type="text" class="form-control" value="{{ old('position')}}" name="position" placeholder="Position"/>
                <div class="">{{$errors->first('position')}}</div>
            </div>
            <div class="form-group col-md-12">
                <label for="duty">Responsibility</label>
                <textarea name="duty" class="form-control" id="" cols="30" rows="10" placeholder="Responsibility">{{ old('duty')}}</textarea>
                <div class="">{{$errors->first('duty')}}</div>
            </div>
            <div class="form-group col-md-6">
                <label for="language">Language</label>
                <input type="text" class="form-control" value="{{ old('language')}}" name="language" placeholder="Language"/>
                <div class="">{{$errors->first('language')}}</div>
            </div>
            <div class="form-group col-md-6">
                <label for="location">Location</label>
                <input type="text" class="form-control" value="{{ old('location')}}" name="location" placeholder="Location"/>
                <div class="">{{$errors->first('location')}}</div>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email Address</label>
                <input type="text" class="form-control" value="{{ old('email')}}" name="email" placeholder="Email Address"/>
                <div class="">{{$errors->first('email')}}</div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-block btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
