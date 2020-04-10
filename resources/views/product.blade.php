<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Tutorial</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>

          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Laravel Tutorial</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
              </ul>
                <a href="{{ route('product.create') }}" class="btn btn-success my-2 my-sm-0">Create product</a>
            </div>
          </nav>
          <div class="container py-3">
          <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <h3>First Product</h3>
                  </div>
                  <div class="card-body">
                    <p>This is Product description</p>
                    <a href="" class="btn btn-primary btn-block">Read More</a>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </body>
</html>