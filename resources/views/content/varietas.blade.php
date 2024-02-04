@extends('webtanidatar.master')

@section('content')
<!-- Your existing code for the main view -->
<!-- Title -->
<div id="container" style="display: flex; flex-direction: column; align-items: center; padding: 15px; text-align: center;">

    <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
        <img style="width: 136px; height: 136px; margin-right: 10px;" src="../assets/icons/header.png" />
        <div style="font-size: 24px; font-family: Poppins; font-weight: 700; color: #1E1E1E;">
        <p style="font-size: 34px;font-family: Poppins; font-weight: 1000;">INFORMASI</p>
        <p style="font-size: 28px; font-family: Poppins; font-style: italic; font-weight: 1000;">Seputar Jenis Padi</p>
        </div>
    </div>
</div>



<!-- Search Bar -->
    <div style="width: 100%; padding: 20px; background: #FFFFFF; justify-content: center; align-items: center; display: flex;">
        <form action="{{ route('search') }}" method="GET" style="display: flex; align-items: center;">
            <input type="text" name="query" placeholder="Search..." style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-right: 10px;">
            <button type="submit" style="padding: 10px; background-color: #198754; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Search</button>
        </form>
    </div>

<!-- Rest of your content -->

    
    @if ($varietas->count() > 0)
        <div id="sidebar" style="display: flex; flex-wrap: wrap; justify-content: space-around; padding: 20px;gap: 20px;">
            @foreach ($varietas as $varieta)    
                <div style="flex: 1 1 0; max-width: 340px; align-self: stretch; padding: 10px; background: white; border-radius: 20px; border: 1px black solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: inline-flex">
                    <div style="width: 100%; height: 284px; padding-top: 28px; padding-bottom: 35px; background: white; border-radius: 12px; overflow: hidden; flex-direction: column; justify-content: center; align-items: center; display: flex">
                        <img style="width: 100%; height: 100%; object-fit: cover; object-position: center center; display: block;" src="../assets/icons/rice.jpg" />
                    </div>
                <div style="align-self: stretch; height: 54px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 12px; display: inline-flex">
                        <div style="flex: 1 1 0; text-align: center; color: #212322; font-size: 18px; font-family: Nunito; font-weight: 700; line-height: 26px; word-wrap: break-word">{{ $varieta->name }}</div>
                    </div>
                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
                        <div style="flex: 1 1 0; text-align: center; color: #212322; font-size: 16px; font-family: Poppins; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $varieta->description }}</div>
                    </div>
                </div>
                <a href="#" class="btn btn_varietas" data-toggle="modal" data-target="#productModal{{ $varieta->id }}">Cek Informasi</a>
        </div>


            <!-- Modal -->
            <div class="modal fade" id="productModal{{ $varieta->id }}" tabindex="-1" role="dialog" aria-labelledby="productModalLabel{{ $varieta->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header" style="background-color: #198754; text-align: center;">
                        <h5 class="modal-title" style="font-family: Nunito; color: #fff; display: inline-block;" id="productModalLabel{{ $varieta->id }}">{{ $varieta->name }}</h5>
                    </div>
                        <div class="modal-body">
                            <p><b>Umur Tanaman: </b>{{ $varieta->umur_tanaman }}</p>
                            <p><b>Tinggi Tanaman: </b>{{ $varieta->tinggi_tanaman }}</p>
                            <p><b>Bentuk Gabah: </b>{{ $varieta->bentuk_gabah }}</p>
                            <p><b>Warna Gabah: </b>{{ $varieta->warna_gabah }}</p>
                            <p><b>Kerebahan: </b>{{ $varieta->kerebahan }}</p>
                            <p><b>Tekstur Nasi: </b>{{ $varieta->tekstur_nasi }}</p>
                            <p><b>Potensi Hasil: </b>{{ $varieta->potensi_hasil }}</p>
                            <p><b>Ketahanan Hama: </b> {{ $varieta->ketahanan_hama }}</p>
                            <p><b>Ketahanan Penyakit: </b>{{ $varieta->ketahanan_penyakit }}</p>
                            <p><b>Anjuran Tanam: </b> {{ $varieta->anjuran_tanam }}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Modal -->
        @endforeach
    </div>
    <div style="display: flex; justify-content: center; margin-top: 20px;">
        {{ $varietas->links('pagination::bootstrap-4') }}
    </div>
    @else
    <div style="width: 100%; height: 100%; position: relative; background: white;">
    <div style="width: 1280px; height: 534px; left: 0px; top: 0px; position: relative;"></div>
    <div style="left: 500px; top: -300px; position: relative; color: black; font-size: 48px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Oops! Data Tidak Ditemukan.</div>
    </div>
    @endif
@endsection
