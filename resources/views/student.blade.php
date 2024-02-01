<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<form action="{{url('logout')}}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
     

    <div class="container">
        <h2>Registration Form    {{ session('username') }}</h2>

   
        <form action="{{url('student-form-submit')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Enter First Name:</label>
                <input type="first_name" class="form-control" id="first_name" placeholder="Enter first_name"
                    name="first_name" value="{{old('first_name')}}">
                <span class="text-danger">@error('first_name'){{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="name">Enter Last Name:</label>
                <input type="last_name" class="form-control" id="last_name" placeholder="Enter last_name"
                    name="last_name" value="{{old('last_name')}}">
                <span class="text-danger">@error('last_name'){{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
                    value="{{old('email')}}">
                <span class="text-danger">@error('email'){{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                <span class="text-danger">@error('password'){{$message}} @enderror</span>
            </div>
         
            <div class="form-group">
                <label for="pwd">Confirm Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter confirm password"
                    name="confirm_password">
                <span class="text-danger">@error('confirm_password'){{$message}} @enderror</span>
            </div>
           
            
            <div class="form-group">
                <label class="form-group">select gender:</label>
                <input type="radio" id="male" name="gender" value="male" id="">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female" id="">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="other" id="">
                <label for="other">Other</label>
                <span class="text-danger">@error('gender'){{$message}} @enderror</span>
            </div>
                     
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>