@extends("include.layout")
@section("main-content")
    <div class="container">
        <h1 class="text-center">Insert new Student Detail</h1>
        <form action="/insert" method="post" enctype="multipart/form-data">
            @csrf
            Enter Name: <input type="text" name="name" class="form-control">
            <br>
            Enter Email: <input type="email" name="email" class="form-control">
            <br>
            Select Gender: 
            <label><input type="radio" name="gender" class="form-" value="male"> Male</label>
            <label><input type="radio" name="gender" class="form-" value="female"> Female</label>
            <br>
            Choose course: 
            <label><input type="checkbox" name="course[]" value="English" class="form-"> English </label>
            <label><input type="checkbox" name="course[]" value="Hindi" class="form-"> Hindi </label>
            <label><input type="checkbox" name="course[]" value="Math" class="form-"> Math </label>
            <label><input type="checkbox" name="course[]" value="Sceince" class="form-"> Science </label>
            <br>
            Upload Image: <input type="file" name="img" class="form-control">
            <br>
            Select Country: 
            <select name="country" class="form-control">
                <option value="India">India</option>
                <option value="UAE">UAE</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
            </select>
            <br>
            <input type="submit" value="Submit"  class="btn btn-primary w-100">
        </form>
    </div>
@endsection