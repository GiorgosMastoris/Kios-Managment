<!doctype html>
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
                <a href="{{ route('product.create') }}" class="btn btn-success my-2 my-sm-0">Create Product</a>
            </div>
          </nav>
          <div class="container py-3">
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <form method="POST" action="{{ route('product.store') }}">
                @csrf

                <div class="form-group">
                  <label for="name">Product Name</label>
                  <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="product-title">
                </div>

                <div class="form-group">
                  <label for="slug">Slug</label>
                  <input type="text" name="slug" class="form-control" value="{{ old('slug') }}" placeholder="product-slug">
                </div>

                <div class="form-group">
                  <label for="barcode">barcode</label>
                  <input type="text" name="barcode" min="0" value="0" step=".01" class="form-control" value="{{ old('barcode') }}" placeholder="barcode">
                </div>

                <div class="form-group">
                  <label for="Price">Price</label>
                  <input type="number" name="price" class="form-control" value="{{ old('price') }}" placeholder="price">
                </div>

                
                <div class="form-group">
                  <label for="fpa">F.P.A</label>
                  <input type="number" name="fpa" min="0" value="0" step=".01" class="form-control" value="{{ old('fpa') }}" placeholder="F.P.A">
                </div>
                

                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea name="description" rows="8" cols="80" class="form-control">{{ old('description') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Create Product</button>
              </form>
            </div>
          </div>
        </div>
    </body>
</html>

                         


