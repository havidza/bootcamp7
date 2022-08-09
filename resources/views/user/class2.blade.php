@extends('layouts.app')
<br><br><br>
@section('content')

<div class="container">
    @foreach ($camp_feeds as $cf)
    <br><br><center>
        <h3>{{ $cf->title }}</h3><br><br><br>
    <div class="row">
        <div class="col-4">
            <table class="table table-borderless table-responsive-md"> 
               <thead>
                    <tr>
                        <th>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Pendahuluan
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="list-group">
                                            <li class="list-group-item">Pengertian Komputasi Awan.</li>
                                            <li class="list-group-item">Manfaat Komputasi Awan</li>
                                            <li class="list-group-item">Jenis Layanan Cloud</li>
                                          </ul>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Pengenalan Azure
                                  </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="list-group">
                                            <li class="list-group-item">Layanan di Azure</li>
                                          </ul>
                                    </div>
                                </div>
                              </div>
                              {{-- @if (!$cf->Camp->title == 'Belajar Nagih') --}}
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Knowledge Check
                                  </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <div class="accordion-body">
                                        <ul class="list-group">
                                            <a href="{{ route('user.question2') }}"><li class="list-group-item">Question</li></a>
                                          </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              {{-- @endif --}}
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            {{-- @if ($cf->camp_id == 1)
                            <a href="#"> <button>Cetak PDF</button>
                             </a>
                             <a href="#"> <button>Cetak Sertifikat</button>
                             </a>   
                            @endif --}}
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
                                <li class="list-group-item"><h4>{{ $cf->header }}</h4></td></li>
                            </ul>
                    </tr>
                    <tr><tr><td><br></td></tr>
                        <td align="center"><img src="{{ $cf->image }}" width="90%"></td>
                    </tr>
                    <tr><tr><td><br></td></tr>
                        <td bgcolor="blue"><p>{!! $cf->feed !!}</p></td>
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