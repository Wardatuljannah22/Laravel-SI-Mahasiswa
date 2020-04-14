@extends("layout")

@section("content")
	<form action="{{ route('biodata.store')}}" method="POST" calss="form-horizontal" 
	enctype="multipart/form-data">

		<!-- @csrf -->

		<!-- laravel v5.5 ke bawah -->
		{{ csrf_field() }}

		
		<div class="form-group">
			<label class="control-label">Nama</label>
			<input type="text" name="name" class="form-control" name="name" >
		</div>

		<div class="form-group">
			<label class="control-label">NIM</label>
			<input type="text" name="nim" class="form-control" name="nim" >
		</div>

		<div class="form-group">
			<label class="control-label">Alamat</label>
			<textarea class="form-control" name="address" rows="10"></textarea>
		</div>

		<div class="form-group">
			<label class="control-label">Foto</label>
			<input type="file" name="photo" required>	
		</div>

		<div class="form-group">
			<button class="btn btn-primary" type="submit">Simpan</button>
			<a href="{{ route('biodata.index' ) }}" class="btn btn-danger"> 
				Batal
			</a>
		</div>
		
	</form>

@endsection