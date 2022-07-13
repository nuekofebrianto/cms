<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">List</h5>
        <div class="row">
            
            <div class="col-md-6 d-flex gap-1 align-items-center mb-3">
                <button type="button" class="btn btn-primary hstack gap-2 align-self-center" onclick="modaltambah()">
                    <i class="demo-psi-add fs-5"></i>
                    <span class="vr"></span>
                    Tambah User
                </button>
            </div>
            {{-- <div class="col-md-6 d-flex gap-1 align-items-center justify-content-md-end mb-3">
                <button class="btn btn-outline-light hstack gap-2 align-self-center">
                    <i class="demo-pli-printer fs-5"></i>
                    <span class="vr"></span>
                    Export Excel
                </button>
            </div> --}}

        </div>
        <table id="demo-dt-basic" class="table table-striped" cellspacing="0" width="100%" style="white-space: nowrap;" >
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Id Petugas</th>
                    <th>Nama</th>
                    <th>No. Handphone</th>
                    <th>E-mail</th>
                    <th>Kantor</th>
                    <th>Akses</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data['data'] as $asdata)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$asdata->idpetugas}}</td>
                    <td>{{$asdata->nama}}</td>
                    <td>{{$asdata->no_hp}}</td>
                    <td>{{$asdata->email}}</td>
                    <td>{{$asdata->idkantor}} - {{$asdata->nama_kantor}}</td>                    
                    <td><span class="badge bg-success">{{$asdata->hak_akses}}</span></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

<script>
    $('#demo-dt-basic').dataTable({
        "pageLength": 10,
        "responsive":false,
        "sScrollX": "0%",
        scrollCollapse: true,
        fixedColumns:   {
            left: 1,
            right: 1
        }
    });
</script>