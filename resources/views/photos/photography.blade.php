@extends('photos.layout')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
		        <!-- Photos -->
                
				<div class="col-xs-12 menu-box">
                    @foreach ($photos as $photo)
                    <a href="/">
                        <div class="col-xs-4">
                            <div class="col-xs-12 menu-cards post-card"
                            style="background-image: url({{$photo->url}});">
                            </div>
                            <div class="col-xs-12 caption-card">
                            {{$photo->caption}}
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
