@extends('layouts.app')

@section('content')

    {{-- <div class="container"><br><br>
        <div class="row row-cols-2" style="padding: 20px;">
            <div class="col-6 col-md-3 shadow-sm border rounded">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Pendahuluan</a>
                    <a href="#" class="list-group-item list-group-item-action">Apa itu Website?</a>
                    <a href="#" class="list-group-item list-group-item-action">Server dan Client</a>
                    <a href="#" class="list-group-item list-group-item-action">Anatomi Website</a>
                    <a href="#" class="list-group-item list-group-item-action">Requirement Tools</a>
                    
                  </div>
            </div>
            <div class="col-md-8 shadow-sm border rounded" style="padding: 20px;">
                <h2>BELAJAR NAGIH</h2>
                <h5>Apa itu Website?</h5>
                <p align="justify">Website adalah sebuah halaman yang menampilkan informasi berupa teks atau gambar. Website dapat diakses melalui internet menggunakan browser. Website ini unik karena tiap halaman dapat saling terhubung dengan menggunakan hypertext links. Umumnya sebuah website memuat informasi yang disediakan secara perorangan, kelompok, atau organisasi. Semua informasi yang tersedia pada halaman website disimpan pada server.</p>
                <p align="justify">Website sudah berkembang sangat pesat. Sekarang, website digunakan tidak hanya untuk media berbagi informasi atau berita. Layaknya sebuah aplikasi pada komputer dan handphone kita, website dapat digunakan untuk komunikasi secara real-time, mendengarkan sebuah lagu, bahkan photo editing sekarang dapat dilakukan pada sebuah website.</p>
                <p align="justify">Website sendiri merupakan teknologi yang sudah ada sejak 30 tahun silam. Tim Berners-Lee seorang ilmuwan Inggris menemukan World Wide Web (WWW) pada tahun 1989 ketika ia bekerja di CERN (Conseil Européen pour la Recherche Nucléaire). Web awalnya dibuat dan dikembangkan untuk memenuhi permintaan dalam berbagi informasi secara otomatis antar ilmuwan di universitas dan lembaga di seluruh dunia. Web pertama di CERN didedikasikan sebagai web pertama di dunia. Selain itu, pada tahun 2013 CERN merilis “a project to restore this first ever website: info.cern.ch” untuk mengabadikan website pertama di dunia. Thank you CERN! Thank you Tim Berners-Lee!</p>
                </div>
        </div>
    </div> --}}

<div class="container">
    @foreach ($camp_feeds as $cf)
    <br><br><center>
        <h5>{{ $cf->header }}</h5><br><br>
    <div class="row">
        <div class="col-4">
            <table class="table table-borderless table-responsive-md"> 
               <thead>
                    <tr>
                        <th>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Pendahuluan</a>
                                <a href="#" class="list-group-item list-group-item-action">Komputasi Cloud</a>
                                <a href="#" class="list-group-item list-group-item-action">Model Penerapan Untuk Komputasi Dasar</a>
                              </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            @if ($cf->camp_id == 1)
                            <a href="#"> <button>Cetak PDF</button>
                             </a>
                             <a href="#"> <button>Cetak Sertifikat</button>
                             </a>   
                            @endif
                        </th>
                    </tr>
               </thead>
            </table>
        </div>
        <div class="col-8">
            <table class="table table-borderless table-responsive-md">
                <thead>
                    <tr>
                        <td align="center">
                            <ul class="list-group">
                                <li class="list-group-item"><h4>{{ $cf->title }}</h4></td></li>
                            </ul>
                    </tr>
                    <tr><tr><td><br></td></tr>
                        <td align="center"><img src="{{ $cf->image }}" width="100%"></td>
                    </tr>
                    <tr><tr><td><br></td></tr>
                        <td align="justify">{{ $cf->feed }}</td>
                    </tr>
                </thead>
            </table>
            <table class="table table-borderless table-responsive-md">
                <thead>
                <tr>
                    <td><ul class="pagination">
                        <li class="page-item"><a class="page-link" href="{{ $camp_feeds->previousPageUrl() }}">Previous</a></li>
                      </ul>
                    </td>
                    <td>
                        <ul class="pagination justify-content-end">
                            <li class="page-item"><a class="page-link" href="{{ $camp_feeds->nextPageUrl() }}">Next</a></li>
                        </ul>
                    </td>
                </tr>    
                </thead>
            </table> 
        </div>
    </div>
</center>
@endforeach
{{-- {{ $camp_feeds->links() }} --}}
</div>
@endsection