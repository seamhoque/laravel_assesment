
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
                Add Product
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
                <form method="post" action="{{ route('products.store') }}">
                    <div class="form-group">
                        @csrf
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" name="product_name"/>
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price :</label>
                        <input type="text" class="form-control" name="product_price"/>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Quantity:</label>
                        <input type="text" class="form-control" name="product_qty"/>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Description:</label>
                        <input type="text" class="form-control" name="product_desc"/>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Measurement:</label>
                        <input type="text" class="form-control" name="product_measurement"/>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Supplier Name:</label>
                        <input type="text" class="form-control" name="supplier_name"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
        </div>

    @endsection
@else
    <h1>please log in</h1>
@endauth
