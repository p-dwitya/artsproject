@extends('photos.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Photos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('photos.index') }}"> Back</a>
            </div>
        </div>
    </div>


    {!! Form::model($photo, ['method' => 'PATCH','route' => ['photos.update', $photo->id], 'files'=> true ]) !!}
        @include('photos.form')
    {!! Form::close() !!}

@endsection