@extends('frontend.layout')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('frontend/images/2571982.jpg')}}');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
				<div class="col-md-9 ftco-animate pb-5">
					<p class="breadcrumbs"><span class="mr-2"><a href="{{route('homepage')}}">Home <i
									class="ion-ios-arrow-forward"></i></a></span> <span>Detail Barang <i
								class="ion-ios-arrow-forward"></i></span></p>
					<h1 class="mb-3 bread">Detail Barang : <b>{{ $shop->nama_barang }}</b></h1>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-car-details">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="car-details">
						<div class="img rounded" style="background-image: url({{ Storage::url($shop->thumbnail)}});"></div>
						<div class="text text-center">
							<h2>{{ $shop->nama_barang }}</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="media-body py-md-4">
							<div class="d-flex mb-3 align-items-center">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fi fi-sr-tags"></span></div>
								<div class="text">
									<h3 class="heading mb-0 pl-3">
										Harga
										<span>Rp.{{$shop->harga}}</span>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="media-body py-md-4">
							<div class="d-flex mb-3 align-items-center">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fi fi-sr-house-flood"></span></div>
								<div class="text">
									<h3 class="heading mb-0 pl-3">
										Kondisi
										<span>{{$shop->kondisi}}</span>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="media-body py-md-4">
							<div class="d-flex mb-3 align-items-center">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fi fi-sr-house-user"></span></div>
								<div class="text">
									<h3 class="heading mb-0 pl-3">
										Penjual
										<span>{{$shop->penjual}}</span>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="media-body py-md-4">
							<div class="d-flex mb-3 align-items-center">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fi fi-sr-user"></span></div>
								<div class="text">
									<h3 class="heading mb-0 pl-3">
										Contact
										<span>{{$shop->contact}}</span>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pills">
					<div class="bd-example bd-example-tabs">
						<div class="d-flex justify-content-center">
							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

								<li class="nav-item">
									<a class="nav-link active" id="pills-manufacturer-tab" data-toggle="pill"
										href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer"
										aria-expanded="true">Deskripsi Produk</a>
								</li>
							</ul>
						</div>

						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-manufacturer" role="tabpanel"
								aria-labelledby="pills-manufacturer-tab">
								<p>{{ $shop->deskripsi }}</p>
							</div>
						</div>
						<p class="text-center mt-5"><a href="https://api.whatsapp.com/send/?phone={{$shop->contact}}&text=hello+world"
										class="btn text-center mx-auto m-auto ml-auto btn-primary py-3 px-4">Hubungi Penjual</a>
								</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					
					<h2 class="mb-2">Barang yang mungkin kamu suka</h2>
				</div>
			</div>
			<div class="row">
				@foreach($related_shops as $related_shop)
				<div class="col-md-4">
					<div class="car-wrap rounded ftco-animate">
						<div class="img rounded d-flex align-items-end"
							style="background-image: url({{ Storage::url($related_shop->thumbnail)}});">
						</div>
						<div class="text">
							<h2 class="mb-0"><a href="car-single.html">{{ $related_shop->nama_barang }}</a></h2>
							<div class="d-flex mb-3">
								<p class="price ml-auto">Rp.{{ $related_shop->harga }}</p>
							</div>
							<p class="d-flex mb-0 d-block"> <a
									href="{{ route('shop.show', $related_shop->nama_barang) }}" class="btn btn-secondary py-2 ml-1">Detail Produk</a></p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>

@endsection