@extends('photos.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left form-title">
            <h2>Add New Photos</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('photos.index') }}"> Back</a>
        </div>
    </div>
</div>


{!! Form::open(array('route' => 'photos.store','method'=>'POST')) !!}
 @include('photos.form')
{!! Form::close() !!}

@endsection