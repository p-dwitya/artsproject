@extends('photos.layout')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
		        <!-- Photos -->
                
				<div class="col-xs-12 menu-box">
                    <div class="col-xs-12">
                        <a href="/photos/create" class="btn btn-primary">Create</a>
                    </div>
                    @foreach ($photos as $photo)
                    <a href="/">
                        <div class="col-xs-4">
                            <a href="/photos/{{$photo->id}}">
                                <div class="col-xs-12 menu-cards post-card"
                                style="background-image: url(/img/photos/{{$photo->url}});">
                                </div>
                                <div class="col-xs-12 caption-card">
                                {{$photo->caption}}
                                </div>
                            </a>
                            <div class="col-xs-12 caption-card">
                            <a class="btn btn-primary edit-btn" href="{{ route('photos.edit',$photo->id) }}">Edit</a>
                                {!! Form::open(['method' => 'DELETE','route' => ['photos.destroy', $photo->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'style'=>'width:70px']) !!}
                                {!! Form::close() !!}  
                            </div>
                        </div>
                    </a>
                    @endforeach
				</div>
				<!-- Footer -->
				<!-- <div class="col-xs-12 footer-text">
					<p>
					Wates Street KM 9,5 <br>
					Sedayu <br>
					Bantul <br>
					</p>
				</div> -->
@endsection
