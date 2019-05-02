@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
