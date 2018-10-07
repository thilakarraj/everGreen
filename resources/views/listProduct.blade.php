@extends('layouts.app')

@section('content')
<h4>Showing {{ $products->firstItem() }} - {{ $products->lastItem() }}</h4>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List Product</div>
                <a class="btn btn-primary" href="{{ url('addProduct') }}">Add Product</a>
                <div class="panel-body">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th> Product Name  </th>
                            <th> Product Description </th>
                            <th> Product Comments  </th>
                            <th> Length  </th>
                            <th> Width </th>
                            <th> Height </th>   
                            <th> Actions </th>                                 
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                    <tr class="showcase-link">
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->comment }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->length }}</td>
                        <td>{{ $product->width }}</td>
                        <td>{{ $product->height }}</td>
                        <td>
                            <!-- <button type="button" class="btn btn-info btn-xs">Edit</button> -->
                            <!-- <button type="button" class="btn btn-danger btn-xs">Delete</button>  -->
                            <a class="btn btn-info btn-xs" href="{{ url('addProduct/' . $product->id . '/edit') }}">Edit / </a>
                            <a class="btn btn-info btn-xs" href="{{ url('addProduct/edit/' . $product->id ) }}">Edit / </a>
                            <a class="btn btn-danger btn-xs" href="{{ url('addProduct/' . $product->id . '/delete') }}">Delete</a>
                        </td>
                    </tr>        
                    @endforeach
                    </tbody>
                </table>
                    
                </div>
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
