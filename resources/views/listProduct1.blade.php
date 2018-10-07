<!-- Responsive tables start -->
@extends('layouts.app')

@section('content')
    <script>
      $(function(){
         $('#some-id').change(function(e) {
              // alert( this.value );
              window.location = "{{ $products->url(1) }}&perPage=" + this.value;
         });
      });
    </script>
<div class="row">
    <div class="col-xs-12"> 
    <!-- {{ Form::select('name', array('10' => 10,'15' => 15,'20' => 20,'25' => 25,'30' => 30,'100' => 100,'All' => 'all'), $products->count(), array('id' => 'some-id')) }}  
    <form >
        <select id="pagination" onchange="return ssss(this.value);">
            <option value="5" >10</option>
            <option value="15">15</option>
            <option value="20" >20</option>
            <option value="25" >25</option>
            <option value="30" >30</option>
        </select>
    </form> -->
        <p class="pull-left text-bold-600">Package List for Customer</p>
        @if (\Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                @endif 
          <ul class="pull-right settings">               
            <li class="dropdown dropdown-user nav-item">
              <a href="#" data-toggle="dropdown" class="nav-link dropdown-user-link">
                  <i class="icon-settings"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="{{ url('addProduct') }}" class="dropdown-item"> Add Package </a>                   
                </div>
              </li>              
          </ul>         
        <hr>
        <div class="row">
          <div class="col-xs-12">
        <div class="pull-left">

          <div class="form-group">
                      <label class="font-small-1">Showing {{ $products->firstItem() }} - {{ $products->lastItem() }}</label>

                      {{ Form::select('name', array('10' => 10,'25' => 25,'50' => 50,$products->total() => 'All'), $products->perPage(), array('id' => 'some-id','class' => 'form-control showentries')) }}
                    </div>
        
                    
        </div>
        <div class="pull-right">
          <div class="form-group">            
            <input type="text" class="form-control" placeholder="Search" name="Search">
          </div>
        </div> 
        </div> 
      </div>
        <div class="table-responsive">
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
                            <!-- <button type="button" class="btn btn-info btn-xs">Edit</button>
                            <button type="button" class="btn btn-danger btn-xs">Delete</button> --> 
                            <a class="btn btn-info btn-xs" href="{{ url('editProduct/' . $product->id ) }}">Edit</a>
                            <!-- <a class="btn btn-info btn-xs" href="{{ url('addProduct/edit/' . $product->id ) }}">Edit / </a> -->
                            <a class="btn btn-danger btn-xs" href="{{ url('addProduct/' . $product->id . '/delete') }}">Delete</a>
                        </td>
                    </tr>        
                    @endforeach
                    </tbody>
                </table>
                </div>
              <div class="pull-right">
                {{ $products->appends(request()->input())->links() }}
                  </div>
    </div>
</div>
@endsection
<!-- Responsive tables end