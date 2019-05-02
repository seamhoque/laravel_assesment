{{--@extends('layouts.master')

@section('content')
    --}}{{--{{dd($products)}}--}}{{--
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Product Name</td>
                <td>Product Price</td>
                <td>Product Quantity</td>
                <td>Product Description</td>
                <td>Product Measurement</td>
                <td>Supplier Name</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->product_qty}}</td>
                    <td>{{$product->product_description}}</td>
                    <td>{{$product->product_measurement}}</td>
                    <td>{{$product->supplier_name}}</td>
                    <td><a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection--}}


{{--@extends('layouts.app')

@section('content')
   @auth
       <div class="container">
           <table class="table table-striped">
               <thead>
               <tr>
                   <td>ID</td>
                   <td>Product Name</td>
                   <td>Product Price</td>
                   <td>Product Quantity</td>
                   <td>Product Description</td>
                   <td>Product Measurement</td>
                   <td>Supplier Name</td>
                   <td colspan="2">Action</td>
               </tr>
               </thead>
               <tbody>
               @foreach($products as $product)
                   <tr>
                       <td>{{$product->id}}</td>
                       <td>{{$product->product_name}}</td>
                       <td>{{$product->product_price}}</td>
                       <td>{{$product->product_qty}}</td>
                       <td>{{$product->product_description}}</td>
                       <td>{{$product->product_measurement}}</td>
                       <td>{{$product->supplier_name}}</td>
                       <td><a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a></td>
                       <td>
                           <form action="{{ route('products.destroy', $product->id)}}" method="post">
                               @csrf
                               @method('DELETE')
                               <button class="btn btn-danger" type="submit">Delete</button>
                           </form>
                       </td>

                   </tr>
               @endforeach
               </tbody>
           </table>
       </div>
    @endauth
   <h1 style="text-align: center">please log in</h1>
@endsection--}}

@auth
    @extends('layouts.app')

    @section('content')

        <div class="container">
            <a href="{{route('products.create')}}"><button>Add Product</button></a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Product Name</td>
                    <td>Product Price</td>
                    <td>Product Quantity</td>
                    <td>Product Description</td>
                    <td>Product Measurement</td>
                    <td>Supplier Name</td>
                    <td colspan="2">Action</td>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->product_price}}</td>
                        <td>{{$product->product_qty}}</td>
                        <td>{{$product->product_description}}</td>
                        <td>{{$product->product_measurement}}</td>
                        <td>{{$product->supplier_name}}</td>
                        <td><a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{ route('products.destroy', $product->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    @endsection
@else
    <p>please log in</p>

@endauth


