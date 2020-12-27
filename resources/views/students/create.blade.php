@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Student</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('students.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
              <label for="matric_no">Matric No:</label>
              <input type="text" class="form-control" name="matric_no">
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email">
          </div>
          <div class="form-group">
              <label for="gender">Gender:</label>
              <input type="text" class="form-control" name="gender">
          </div>
          <div class="form-group">
              <label for="citizenship">Citizenship:</label>
              <input type="text" class="form-control" name="citizenship">
          </div>
          <div class="form-group">
              <label for="marital_status">Marital Status:</label>
              <input type="text" class="form-control" name="marital_status" >
          </div>
          <div class="form-group">
              <label for="religion">Religion:</label>
              <input type="text" class="form-control" name="religion" >
          </div>
          <div class="form-group">
              <label for="active_status">Active Status:</label>
              <input type="text" class="form-control" name="active_status" >
          </div>
          <div class="form-group">
              <label for="year_of_study">Year of Study:</label>
              <input type="number" class="form-control" name="year_of_study" >
          </div>
          <div class="form-group">
              <label for="id_no">IC/Passport No:</label>
              <input type="number" class="form-control" name="id_no" >
          </div>
          <div class="form-group">
              <label for="date_of_brith">Date of Brith:</label>
              <input type="date" class="form-control" name="date_of_brith">
          </div>                         
          <button type="submit" class="btn btn-primary">Add Student</button>
      </form>
  </div>
</div>
</div>
@endsection