@extends('layout.table')
@section('konten')
<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Kode ticket
						</th>
						<th>
							Nama penonton
						</th>
						<th>
							Harga
						</th>
					</tr>
				</thead>
				<tbody>
					@php $no=1; @endphp
					@foreach($a as $tab)
					<tr>
						<td>
							{{$no++}}
						</td>
						<td>
							{{$tab->Kode_ticket}}
						</td>
						<td>
							{{$tab->Nama_penonton}}
						</td>
						<td>
							{{$tab->Harga}}
						</td>
					</tr>
					@endforeach
					
				</tbody>
			</table> 
			<button type="button" class="btn btn-default">
				Default
			</button>
			@endsection