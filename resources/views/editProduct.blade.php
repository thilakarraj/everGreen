@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Product</div>


                @if (\Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                @endif 
                <div class="panel-body">
                   {!! Form::open(array('url' => 'editProduct', 'class'=>'form-horizontal')) !!}

                        {{ csrf_field() }}
                        
                        <input type="hidden" name="id" value="{{ $products->id }}" class="form-control">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" name="name" value="{{ $errors->has('name') ? old('name') : $products->name }}" class="form-control">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                            <label for="comment" class="col-md-4 control-label">Comment</label>

                            <div class="col-md-6">
                                <input type="text" name="comment" value="{{ $errors->has('comment') ? old('comment') : $products->comment }}" class="form-control">
                                @if ($errors->has('comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
