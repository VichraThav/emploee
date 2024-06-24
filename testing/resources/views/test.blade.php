<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>
  <div class="container-fluid pt-5 pb-5 bg-danger" style="border:1px solid red; height:100vh;">
    <div class="container border h-100 bg-white rounded-4" style="width: 600px;">
        <h1 class="w-100 text-center fw-bold mt-4">Employee Form</h1>
        <form action="{{ route('test.create') }}" method="POST">
          @csrf
          <div class="form-group">
              <label for="firstname">First Name</label>
              <input type="text" class="form-control" id="firstname" name="firstname">
          </div>
          <div class="form-group">
              <label for="lastname">Last Name</label>
              <input type="text" class="form-control" id="lastname" name="lastname">
          </div>
          <div class="form-group">
              <label for="gender">Gender</label>
              <input type="text" class="form-control" id="gender" name="gender">
          </div>
          <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="text" class="form-control" id="phone" name="phone">
          </div>
          <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>

</body>
</html>