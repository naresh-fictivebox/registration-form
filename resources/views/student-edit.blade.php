

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
  
<div class="container">
    <h2>Registration Form</h2>
 
    <form action="{{ url('studentlist-update') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="first_name">Enter First Name:</label>
            <input type="hidden" name="stdentId" id="editData"
            value="{{ isset($editData) ? $editData->id : old('editData') }}">

            <input type="text" class="form-control" id="first_name" placeholder="Enter first_name" name="first_name" value="{{ isset($editData) ? $editData->first_name : '' }}">
        </div>
        <div class="form-group">
            <label for="last_name">Enter Last Name:</label>
            <input type="text" class="form-control" id="last_name" placeholder="Enter last_name" name="last_name" value="{{ isset($editData) ? $editData->last_name : '' }}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ isset($editData) ? $editData->email : '' }}">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>
        <div class="form-group">
            <label for="password">Confirm_Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter confirm password" name="confirm_password">
        </div>
        <div class="form-group">
            <label class="form-group">Select gender:</label>
            <input type="radio" id="male" name="gender" value="male" {{ isset($editData) && $editData->gender === 'male' ? 'checked' : '' }}>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" {{ isset($editData) && $editData->gender === 'female' ? 'checked' : '' }}>
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other" {{ isset($editData) && $editData->gender === 'other' ? 'checked' : '' }}>
            <label for="other">Other</label>
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" {{ isset($editData) && $editData->remember ? 'checked' : '' }}> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
