 
@extends('layouts.app')

@section('content')
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

@endsection
