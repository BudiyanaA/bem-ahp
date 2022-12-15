@extends('layouts.app')

@section('title')
Alternatif
@endsection

@section('content')
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Data Alternatif</h6>
                            <a href="{{ route('alternatif.create') }}" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Tambah</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($alternatives as $alt)
                                        <tr>
                                            <td>{{ $loop->index + 1}}</td>
                                            <td>{{ $alt->code }}</td>
                                            <td>{{ $alt->name }}</td>
                                            <td>
                                                <a href="{{ route('alternatif.edit', $alt->id) }}" class="btn btn-success btn-circle">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button onclick="deleteItem('{{ $alt->id }}')" class="btn btn-danger btn-circle">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection

@section('script')
<script>
function deleteItem(id) {
    Swal.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			type: 'warning',
            confirmButtonText: 'Yes, delete it!',
            showCancelButton: true,
		}).then((result) => {
			var url = '{{ route("alternatif.destroy", ":id") }}';
    	url = url.replace(':id', id);

			if (result.isConfirmed) {
				$.ajax({
				url: url,
				method: 'delete',
				cache: false,
				data: {
					"_token": "{{ csrf_token() }}",
				},
				success: function(data){
          if (data === 'success') {
				Swal.fire({
					title: 'Deleted!',
					text: 'Your file has been deleted.',
					type: 'success',
				});
            location.reload();
          } else {
			Swal.fire({
				title: 'Oops...',
				text: 'Ada yang salah!',
				type: 'error',
			});
          }
        },
        error: function (xhr, ajaxOptions, thrownError) {
			Swal.fire({
				title: 'Oops...',
				text: 'Ada yang salah!',
				type: 'error',
			});
        }
      });
		} else {
			Swal.close();
		}
	});
  }
</script>
@endsection