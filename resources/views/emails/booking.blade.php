@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            We Doctor Symphony Company
        @endcomponent
    @endslot

    {{-- Body --}}
    We Doctor

	No Urut Pasien	 : {{ $pasien->no_urut }} 

	Anda telah mendaftarkan antrian di We Doctor

	Nama			 : {{ $pasien->nama_pasien }}
	Tanggal Lahir	 : {{ $pasien->tanggal_lahir_pasien->format('d F Y') }}
	Jenis Kelamin	 : {{ $pasien->jenis_kelamin_pasien }}
	Alamat			 : {{ $pasien->alamat_pasien }}
	Riwayat Penyakit : {{ $pasien->riwayat_sakit }}
	Tanggal Berobat	 : {{ $pasien->tanggal_berobat->format('d F Y') }}
	Lokasi Berobat	 : {{ $pasien->jadwal->tempats->tempat }}
	Dokter Tujuan	 : {{ $pasien->jadwal->doctors->nama_doctor }}

	Perhatikan baik baik agenda anda berikut ini
	Waktu masuk ke dalam ruang periksa 			: {{ $pasien->waktu_masuk }}
	Waktu yang aman anda sudah berada di lokasi : {{ $pasien->waktu_aman }}

    {{-- Subcopy --}}
    @slot('subcopy')
        @component('mail::subcopy')
            Mohon bukti ini dibawa saat anda periksa dokter.
        @endcomponent
    @endslot


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            2017
        @endcomponent
    @endslot
@endcomponent