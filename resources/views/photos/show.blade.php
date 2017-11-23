@extends('photos.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Photos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('photos.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <div class="col-xs-12 menu-cards photo-detail-card"
                style="background-image: url(/img/photos/{{$photo->url}});">
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <div class="col-xs-12 caption-card">
                {{$photo->caption}}
                </div>
            </div>
        </div>
    </div>
@endsection