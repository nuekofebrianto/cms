    <div class="row">
        <div class="col-lg-12">

            <div class="card border-2 border-secondary col-12">
                <table class="table table-bordered m-0" style="border: 1px solid #26A69A">
                    <thead>
                        <tr>
                            <th width="140" class="text-center">Resi</th>
                            <th width="170" class="text-center">Layanan</th>
                            <th width="250" class="text-center">Tujuan</th>
                            <th width="250" class="text-center">Penerima</th>
                            <th width="250"class="text-center">Penerima Paket</th>
                            <th width="170" class="text-center">Ongkir</th>
                            <th width="170" class="text-center">Status</th>
                        </tr>
                    </thead>
                </table>
            </div>
            
            <div class="accordion" id="accor">

                @forelse($data['data'] as $dt)
                    @if(isset($dt->message))
                    <div class="alert alert-danger" role="alert">
                        Nomor Resi tidak ditemukan
                    </div>
                    @else
                        <div class="accordion-item">
                            <div class="accordion-header" id="accor">
                                <button class="p-0 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor{{$loop->index}}" aria-expanded="false" aria-controls="accor{{$loop->index}}">
                                    <div class="card border-2 border-light col-12">

                                        <table class="table table-bordered m-0" style="border: 1px solid #F0F3F8">
                                            <tbody>
                                                <tr>
                                                    <td width="140"><a class="btn-link">{{$dt->connote_code}}</a></td>
                                                    <td width="170">{{$dt->connote_service}}</td>
                                                    <td width="250">{{$dt->connote_receiver_address}}</td>
                                                    <td width="250">{{$dt->connote_receiver_name}}</td>
                                                    <td width="250">{{$dt->pod->receiver}}</td>
                                                    <td width="170">{{$dt->connote_amount}}</td>
                                                    <td width="170">{{$dt->connote_state}}</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </button>
                            </div>
                            <div id="accor{{$loop->index}}" class="accordion-collapse collapse" aria-labelledby="accor{{$loop->index}}" data-bs-parent="#accor">
                                <div class="accordion-body p-0" style="margin-top: 20px; margin-bottom: 20px">

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="card border-2 border-light h-100">
                                                <div class="card-body">
                                                    <h5 class="card-title">Tracking Details</h5>
                                                    <p class="card-text">
                                                        <dt>Tanggal Pengiriman</dt>
                                                        <dd class="mb-3">{{date('d F Y', strtotime($dt->created_at)) }}</dd>
                                                        <dt>Asal</dt>
                                                        {{-- <dd class="mb-3">{{$dt->location_data_created->location_address}}</dd> --}}
                                                        <dt>Tujuan</dt>
                                                        <dd class="mb-3">{{$dt->connote_receiver_address}}</dd>
                                                        <dt>Pengirim</dt>
                                                        <dd class="mb-3">{{$dt->connote_sender_name}}</dd>
                                                        <dt>Penerima</dt>
                                                        <dd class="mb-3">{{$dt->connote_receiver_name}}</dd>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <dt>Foto</dt>
                                                                <dd class="mb-3">
                                                                    <img class="col-md-12" src="{{$dt->pod->photo}}" alt="thumbnails" loading="lazy">
                                                                </dd>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <dt>Signature</dt>
                                                                <dd class="mb-3">
                                                                    <img class="col-md-12" src="{{$dt->pod->signature}}" alt="thumbnails" loading="lazy">
                                                                </dd>
                                                            </div>
                                                        </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card border-2 border-light h-100">
                                                <div class="card-body">
                                                    <h5 class="card-title">History</h5>
                                                    <p class="card-text">
                                                        <div class="timeline">
                                    
                                                            @foreach(array_reverse($dt->connote_history) as $dth)
                                    
                                                            <div class="tl-entry @if($loop->last) active @endif">
                                    
                                    
                                                                @if($loop->index==0)
                                                                    @php 
                                                                        $datemin = '';
                                                                    @endphp
                                                                @else
                                                                    @php 
                                                                        $datemin = date('d M Y', strtotime(array_reverse($dt->connote_history)[$loop->index-1]->date)) ;
                                                                    @endphp
                                                                @endif
                                    
                                                                @if($datemin == date('d M Y', strtotime($dth->date)))
                                                                    <div class="tl-time">
                                                                        <div class="tl-date"></div>
                                                                        <div class="tl-time">{{ date('H:i:s', strtotime($dth->date)) }}</div>
                                                                    </div>
                                                                @else
                                                                    <div class="tl-time">
                                                                        <div class="tl-date">{{ date('d M Y', strtotime($dth->date)) }}</div>
                                                                        <div class="tl-time">{{ date('H:i:s', strtotime($dth->date)) }}</div>
                                                                    </div>
                                                                @endif
                                    
                                                                <div class="tl-point"></div>
                                                                <div class="tl-content card border-2 @if($loop->index==0) border-success @elseif($loop->last) border-danger @else border-info @endif">
                                                                    <div class="card-body">
                                                                        <p class="m-0">{{$dth->content}}</p>
                                                                        @if($dth->connote_state == 'DELIVERED')
                                                                            <span class="badge bg-success">{{$dth->connote_state}}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                    
                                                            @endforeach
                                                            
                                                        </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                <div class="alert alert-danger" role="alert">
                    Nomor Resi tidak ditemukan
                </div>
                @endforelse
                
            </div>

        </div>
    </div>