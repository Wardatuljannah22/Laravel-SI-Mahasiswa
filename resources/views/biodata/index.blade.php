@extends("layout")

@section("content")
<h1>Daftar Mahasiswa</h1>
<a href="{{ route('biodata.create') }}" class="btn btn-primary">
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
create</a></p>

<a href="/biodata-mahasiswa/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a></p>

<table class ="table table-striped  table-hover" id="datatable">
	<thead>
		<tr>
			<th>ID</th>
			<th>NAMA</th>
			<th>NIM</th>
			<th>ACTION</th>

		</tr>
	</thead>
	<tbody>
		@php $i=1 @endphp
		@forelse($mahasiswa as $data)
		<tr>
			<td>{{ $data->id ++}}</td>
			<td>{{ $data->name }}</td>
			<td>{{ $data->nim }}</td>
			<td>
				<a href="{{ route('biodata.show', ['id' => $data->id]) }}" class="btn btn-success">Detail</a>
				<a href="{{ route('biodata.edit', ['id' => $data->id]) }}" class="btn btn-warning">Edit</a>
				<!-- <a href="{{ route('biodata.destroy', ['id' => $data->id]) }}" class="btn btn-danger">Delete</a> -->
				<a onclick="return confirm('Apakah anda yakin?');" href="{{ route('biodata.destroy', ['id' => $data->id])}}" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@empty
		<tr>
			<td colspan="4">Data belum tersedia!</td>
		</tr>
		@endforelse
	</tbody>
</table>
@endsection