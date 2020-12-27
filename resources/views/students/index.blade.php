@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Students</h1>
    <div>
        <a style="margin: 19px;" href="{{ route('students.create')}}" class="btn btn-primary">New Student</a>
    </div>
    <div class="col-sm-12">

      @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div>
      @endif
    </div>
  @isset($students)        
    <table class="table table-striped">
      <thead>
          <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Gender</td>
            <td>Date of Birth</td>
            <td>Citizenship</td>
            <td>IC/Passport No</td>
            <td>Active Status</td>
            <td>Religion</td>
            <td>Year of Study</td>
            <td colspan = 2>Actions</td>
          </tr>
      </thead>
      <tbody>
          @foreach($students as $student)
          <tr>
              <td>{{$student->id}}</td>
              <td>{{$student->name}}</td>
              <td>{{$student->email}}</td>
              <td>{{$student->gender}}</td>
              <td>{{$student->date_of_birth}}</td>
              <td>{{$student->citizenship}}</td>
              <td>{{$student->id_no}}</td>
              <td>{{$student->active_status}}</td>
              <td>{{$student->religion}}</td>
              <td>{{$student->year_of_study}}</td>
              <td>
                  <a href="{{ route('students.edit',$student->id)}}" class="btn btn-primary">Edit</a>
              </td>
              <td>
                  <form action="{{ route('students.destroy', $student->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  @endisset

<div>
</div>
@endsection