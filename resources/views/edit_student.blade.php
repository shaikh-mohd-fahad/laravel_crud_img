@extends("include.layout")
@section("main-content")
    <div class="container">
        <h1 class="text-center">Edit Student Detail</h1>
        <form action="/edit_form/{{$student->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            Enter Name: <input type="text" name="name" value="{{$student->name}}" class="form-control">
            <br>
            Enter Email: <input type="email" name="email" value="{{$student->email}}" class="form-control">
            <br>
            Select Gender: 
            <label><input type="radio" name="gender" class="form-" value="male" {{"male"==="$student->gender"?"checked":'';}}> Male</label>
            <label><input type="radio" name="gender" class="form-" {{"female"==="$student->gender"?"checked":'';}} value="female"> Female</label>
            <br>
            Choose course: 
            <label><input type="checkbox" name="course[]" {{in_array("English",explode(',',$student->course))?"checked":""}} value="English" class="form-"> English </label>
            <label><input type="checkbox" name="course[]" {{in_array("Hindi",explode(',',$student->course))?"checked":""}}  value="Hindi" class="form-"> Hindi </label>
            <label><input type="checkbox" name="course[]" {{in_array("Math",explode(',',$student->course))?"checked":""}}  value="Math" class="form-"> Math </label>
            <label><input type="checkbox" name="course[]" {{in_array("Sceince",explode(',',$student->course))?"checked":""}}  value="Sceince" class="form-"> Science </label>
            <br>
            Upload Image: <input type="file" name="img" class="form-control">
            <br>
            Select Country: 
            <select name="country" class="form-control">
            <option value="India" {{"India"==="$student->country"?"selected":'';}}>India</option>
                <option value="UAE" {{"UAE"==="$student->country"?"selected":'';}}>UAE</option>
                <option value="Saudi Arabia" {{"Saudi Arabia"==="$student->country"?"selected":'';}}>Saudi Arabia</option>
            </select>
            <br>
            <input type="submit" value="Submit"  class="btn btn-primary w-100">
        </form>
    </div>
@endsection
