@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="container">
            <div class="container">
                <a href="{{route('products.create')}}"><button>Add Product</button></a>
                <a href="{{route('products.index')}}"><button>Edit Product</button></a>

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


                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
