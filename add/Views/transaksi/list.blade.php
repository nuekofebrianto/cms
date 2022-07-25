<div class="row mb-3">

    <div class="col-md-6 d-flex gap-1 align-items-center">
        <button type="button" class="btn btn-primary hstack gap-2 align-self-center" onclick="modaltambah()">
            <i class="demo-psi-add fs-5"></i>
            <span class="vr"></span>
            Tambah User
        </button>
    </div>
    <div class="col-md-6 d-flex gap-1 align-items-center justify-content-md-end mb-3">
        <button class="btn btn-outline-light hstack gap-2 align-self-center">
            <i class="demo-pli-printer fs-5"></i>
            <span class="vr"></span>
            Export Excel
        </button>
    </div>

</div>
<table id="demo-dt-basic" class="table table-striped" cellspacing="0" width="100%" style="white-space: nowrap;">
    <thead>
        <tr>
            <th>no</th>
            <th>kditem</th>
            <th>kdproduk</th>
            <th>pengirim</th>
            <th>alamat_pengirim</th>
            <th>penerima</th>
            <th>alamat_penerima</th>
            <th>bea_dasar</th>
            <th>htok</th>
            <th>htnb</th>
            <th>ppn</th>
            <th>diskon</th>
            <th>total_ongkir</th>
            <th>nopenasal</th>
            <th>nopentujuan</th>
            <th>wktposting</th>
            <th>status_akhir</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($data['data'] as $asdata)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $asdata->kditem }}</td>
                <td>{{ $asdata->kdproduk }}</td>
                <td>{{ $asdata->pengirim }}</td>
                <td>{{ $asdata->alamat_pengirim }}</td>
                <td>{{ $asdata->bea_dasar }}</td>
                <td>{{ $asdata->htok }}</td>
                <td>{{ $asdata->htnb }}</td>
                <td>{{ $asdata->ppn }}</td>
                <td>{{ $asdata->diskon }}</td>
                <td>{{ $asdata->total_ongkir }}</td>
                <td>{{ $asdata->nopenasal }}</td>
                <td>{{ $asdata->nopentujuan }}</td>
                <td>{{ $asdata->wktposting }}</td>
                <td>{{ $asdata->status_akhir }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<script>
    $('#demo-dt-basic').dataTable({
        "pageLength": 10,
        "responsive": false,
        "sScrollX": "0%",
        scrollCollapse: true,
        fixedColumns: {
            left: 1,
            right: 1
        }
    });
</script>
