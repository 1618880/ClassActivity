@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a student</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('students.update', $student) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">    
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value={{ $student->name }}>
            </div>
            <div class="form-group">
                <label for="matric_no">Matric No:</label>
                <input type="text" class="form-control" name="matric_no" value={{ $student->matric_no }}>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $student->email }}>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="text" class="form-control" name="gender" value={{ $student->gender }}>
            </div>
            <div class="form-group">
                <label for="citizenship">Citizenship:</label>
                <input type="text" class="form-control" name="citizenship" value={{ $student->citizenship }}>
            </div>
            <div class="form-group">
                <label for="marital_status">Marital Status:</label>
                <input type="text" class="form-control" name="marital_status" value={{ $student->marital_status }}>
            </div>
            <div class="form-group">
                <label for="religion">Religion:</label>
                <input type="text" class="form-control" name="religion"  value={{ $student->religion }}>
            </div>
            <div class="form-group">
                <label for="active_status">Active Status:</label>
                <input type="text" class="form-control" name="active_status" value={{ $student->active_status }}>
            </div>
            <div class="form-group">
                <label for="year_of_study">Year of Study:</label>
                <input type="number" class="form-control" name="year_of_study" value={{ $student->year_of_study }}>
            </div>
            <div class="form-group">
                <label for="id_no">IC/Passport No:</label>
                <input type="number" class="form-control" name="id_no" value={{ $student->id_no }}>
            </div>
            <div class="form-group">
                <label for="date_of_brith">Date of Brith:</label>
                <input type="date" class="form-control" name="date_of_brith" value={{ $student->date_of_brith }}>
            </div> 
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection