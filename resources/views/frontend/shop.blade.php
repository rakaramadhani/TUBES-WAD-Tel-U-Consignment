@extends('frontend.layout')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('frontend/images/2571982.jpg')}}');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
				<div class="col-md-9 ftco-animate pb-5">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
									class="ion-ios-arrow-forward"></i></a></span> <span>Shops <i
								class="ion-ios-arrow-forward"></i></span></p>
					<h1 class="mb-3 bread">Halo, Telutizen ! </h1>
					<h2 style="color: white;">Yukk Temukan Barang kesukaanmu</h2>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row">
				@foreach($shops as $shop)
				<div class="col-md-4">
					<div class="car-wrap rounded ftco-animate">
						<div class="img rounded d-flex align-items-end"
							style="background-image: url({{ Storage::url($shop->thumbnail)}});">
						</div>
						<div class="text">
							<h2 class="mb-0"><a href="{{ route('shop.show', $shop->nama_barang) }}">{{ $shop->nama_barang }}</a></h2>
							<div class="d-flex mb-3">
								<p class="price ml-auto">Rp.{{ $shop->harga }}</p>
							</div>
							<p class="d-flex mb-0 d-block"><center><a href="{{ route('shop.show', $shop->nama_barang) }}" class="btn btn-secondary py-2 ml-1">Detail Produk</a></center> </p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="row justify-content-center mt-5">
				<div class="text-center">
					{{ $shops->links()}}
				</div>

			</div>
		</div>
	</section>
@endsection