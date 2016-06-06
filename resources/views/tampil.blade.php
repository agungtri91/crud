@extends('layouts.index')
@section('content')

<div class="section">
	<div class="card-panel purple darken-3 white-text">Tutorial CRUD Laravel 5.2 dengan Materializecss</div>
</div>

<div class="section">
	
	<div class="row">
		<div class="col s12">
			<h5>{{ $tampilkan->judul }}</h5>
			<p>{!! $tampilkan->gambar !!}</p>
            <div class="divider"></div>
            <p>{!! $tampilkan->isi !!}</p>
               <!--  <form action="upload-gambar" enctype="multipart/form-data" method="POST">
			       <input type="hidden" name="_token" value="{{ csrf_token() }}" />
			       <input name="gambar" type="file"/>
			       <input value="upload" type="submit"/>
			    </form> -->
		</div>
	</div>

</div>

@endsection