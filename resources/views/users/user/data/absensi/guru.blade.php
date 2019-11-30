@if ($kehadiran_guru == 'kosong')

{{ '' }}

@else

@foreach ($kehadiran_guru as $kehadiran)
<tr role="row" class="odd">
	<td class="sorting_1 text-center">{{ $loop->iteration}}</td>

	<td class="text-center">{{ $kehadiran->created_at }}</td>


	@php
	switch ($nama_kehadiran->find($kehadiran->kehadiran_id)->nama) {

		case 'Sakit':
		$badge = 'aqua';
		break;

		case 'Hadir':
		$badge = 'green';
		break;

		case 'Izin':
		$badge = 'yellow';
		break;

		case 'Alpha':
		$badge = 'red';
		break;

		case 'Bolos':
		$badge = 'grey';
		break;

		case 'Terlambat':
		$badge = 'purple';
		break;

		default:
		$badge = 'grey';
		break;
	}
	@endphp

	<td class="text-center"><span class="badge bg-{{$badge}}">{{ $nama_kehadiran->find($kehadiran->kehadiran_id)->nama }}</span></td>

	@php
	switch ($kehadiran->verifikasi_ks) {
		case 'Sudah Di Verifikasi':
		$badgeVerifGuru = 'green';
		break;

		case 'Belum Di Verifikasi':
		$badgeVerifGuru = 'red';
		break;

		default:
		$badgeVerifGuru = 'red';
		break;
	}
	switch ($kehadiran->verifikasi_guru_piket) {
		case 'Sudah Di Verifikasi':
		$badgeVerifPiket = 'green';
		break;

		case 'Belum Di Verifikasi':
		$badgeVerifPiket = 'red';
		break;

		default:
		$badgeVerifPiket = 'red';
		break;
	}
	@endphp

	<td class="text-center"><span class="badge bg-{{$badgeVerifGuru}}">{{ $kehadiran->verifikasi_ks }}</span></td>
	<td class="text-center"><span class="badge bg-{{$badgeVerifPiket}}">{{ $kehadiran->verifikasi_guru_piket }}</span></td>
</tr>

@endforeach
@endif
