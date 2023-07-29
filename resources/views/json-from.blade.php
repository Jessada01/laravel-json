<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Json demo</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h2>Store Data json format</h2>
        <div class="card">
            <div class="card-header">Data profile</div>
            <div class="card-body">

                @if (Session::has('success'))
                <div class="alert alert-success" role="alert" >
                    {{ Session::get('success') }}
                </div>

                @endif

                <form action="{{ route('json.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="phone">phone number</label>
                        <input type="text" name="phone" placeholder="Enter phone">
                    </div><br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>



</html>
