@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Products') }}</div>

        <div class="card-body">
          <form action="{{ route('product.update', $product->id) }}" method="post">
          @csrf
         @method('PUT')

            <div class="input-group mb-3">
              <input type="text" class="form-control" name="name" value="{{ old('name', $product->name) }}" required
                placeholder="Name Product">
              <div class="input-group-append">
                <div class="input-group-text">
                  Product
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <select name="merchant_id" class="form-control">
                <option value="{{ $product->merchant->merchant_name }}" disabled>Choosee.........</option>
                @foreach ($merchant as $item)
                <option value="{{ $item->id }}">{{ $item->merchant_name }}</option>
                @endforeach
              </select>
              <div class="input-group-append">
                <div class="input-group-text">
                  Product
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <input type="number" class="form-control" name="price" value="{{ old('price', $product->price) }}" required
                placeholder="Price Product">
              <div class="input-group-append">
                <div class="input-group-text">
                  Product
                </div>
              </div>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="normal" value="normal" {{ $product->status == 'normal' ? 'checked' : '' }}>
              <label class="form-check-label" for="normal">
                Normal Product
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="discontinued" value="discontinued" {{ $product->status == 'discontinued' ? 'checked' : '' }}>
              <label class="form-check-label" for="discontinued">
                Discontinued Product
              </label>
            </div>

        </div>

        <div class="row my-2">
          <!-- /.col -->
          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
          </div>
          <!-- /.col -->
        </div>

        </form>
      </div>

    </div>
  </div>
</div>
</div>
@endsection