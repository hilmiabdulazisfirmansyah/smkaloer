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
		$badge = 'bg-aqua';
		break;

		case 'Hadir':
		$badge = 'bg-green';
		break;

		case 'Izin':
		$badge = 'bg-yellow';
		break;

		case 'Alpha':
		$badge = 'bg-red';
		break;

		case 'Bolos':
		$badge = 'bg-grey';
		break;

		case 'Terlambat':
		$badge = 'bg-purple';
		break;

		default:
		$badge = 'bg-grey';
		break;
	}
	@endphp

	<td class="text-center"><span class="badge {{$badge}}">{{ $nama_kehadiran->find($kehadiran->kehadiran_id)->nama }}</span></td>

	@php
	switch ($kehadiran->verifikasi_ks) {
		case 'Sudah Di Verifikasi':
		$badgeVerifGuru = 'bg-green';
		break;

		case 'Belum Di Verifikasi':
		$badgeVerifGuru = 'bg-red';
		break;

		default:
		$badgeVerifGuru = 'bg-red';
		break;
	}
	switch ($kehadiran->verifikasi_guru_piket) {
		case 'Sudah Di Verifikasi':
		$badgeVerifPiket = 'bg-green';
		break;

		case 'Belum Di Verifikasi':
		$badgeVerifPiket = 'bg-red';
		break;

		default:
		$badgeVerifPiket = 'bg-red';
		break;
	}
	@endphp

	<td class="text-center"><span class="badge {{$badgeVerifGuru}}">{{ $kehadiran->verifikasi_ks }}</span></td>
	<td class="text-center"><span class="badge {{$badgeVerifPiket}}">{{ $kehadiran->verifikasi_guru_piket }}</span></td>
</tr>

@endforeach
@endif
