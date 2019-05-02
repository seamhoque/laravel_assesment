{{--
@extends('layouts.master')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Share
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('products.update', $product->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Product Name:</label>
                    <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}"/>
                </div>
                <div class="form-group">
                    <label for="price">Product Price :</label>
                    <input type="text" class="form-control" name="product_price" value="{{$product->product_price}}"/>
                </div>
                <div class="form-group">
                    <label for="quantity">Product Quantity:</label>
                    <input type="text" class="form-control" name="product_qty" value="{{$product->product_qty}}"/>
                </div>
                <div class="form-group">
                    <label for="quantity">Product Description:</label>
                    <input type="text" class="form-control" name="product_desc" value="{{$product->product_description}}"/>
                </div>
                <div class="form-group">
                    <label for="quantity">Product Measurement:</label>
                    <input type="text" class="form-control" name="product_measurement" value="{{$product->product_measurement}}"/>
                </div>
                <div class="form-group">
                    <label for="quantity">Supplier Name:</label>
                    <input type="text" class="form-control" value={{$product->supplier_name}} name="supplier_name" />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
--}}
@auth
    @extends('layouts.app')
    @section('content')
        <style>
            .uper {
                margin-top: 40px;
            }
        </style>
       <div class="container">
           <div class="card uper">
               <div class="card-header">
                   Edit Product
               </div>
               <div class="card-body">
                   @if ($errors->any())
                       <div class="alert alert-danger">
                           <ul>
                               @foreach ($errors->all() as $error)
                                   <li>{{ $error }}</li>
                               @endforeach
                           </ul>
                       </div><br />
                   @endif
                   <form method="post" action="{{ route('products.update', $product->id) }}">
                       @method('PATCH')
                       @csrf
                       <div class="form-group">
                           <label for="name">Product Name:</label>
                           <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}"/>
                       </div>
                       <div class="form-group">
                           <label for="price">Product Price :</label>
                           <input type="text" class="form-control" name="product_price" value="{{$product->product_price}}"/>
                       </div>
                       <div class="form-group">
                           <label for="quantity">Product Quantity:</label>
                           <input type="text" class="form-control" name="product_qty" value="{{$product->product_qty}}"/>
                       </div>
                       <div class="form-group">
                           <label for="quantity">Product Description:</label>
                           <input type="text" class="form-control" name="product_desc" value="{{$product->product_description}}"/>
                       </div>
                       <div class="form-group">
                           <label for="quantity">Product Measurement:</label>
                           <input type="text" class="form-control" name="product_measurement" value="{{$product->product_measurement}}"/>
                       </div>
                       <div class="form-group">
                           <label for="quantity">Supplier Name:</label>
                           <input type="text" class="form-control" value={{$product->supplier_name}} name="supplier_name" />
                       </div>
                       <button type="submit" class="btn btn-primary">Update</button>
                   </form>
               </div>
           </div>
       </div>

    @endsection
    @else
        <h1>Please log in</h1>
@endauth
