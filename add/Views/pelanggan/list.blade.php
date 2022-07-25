<div class="row mb-3">

    <div class="col-md-6 d-flex gap-1 align-items-center justify-content-md-end mb-3">
        <button class="btn btn-outline-light hstack gap-2 align-self-center">
            <i class="demo-pli-printer fs-5"></i>
            <span class="vr"></span>
            Export Excel
        </button>
    </div>

</div>
<div class="template-table">
    <table id="demo-dt-basic" class="table table-striped" cellspacing="0" width="100%" style="white-space: nowrap;">
        <thead>
            <tr>
                <th>no</th>
                <th>Id Pelanggan</th>
                <th>Nama Pelanggan</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($data['data'] as $asdata)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $asdata->idpelanggan }}</td>
                <td>{{ $asdata->nama_pelanggan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

<div class="export-table" hidden></div>

<script>
    var templateTable = $('.template-table').html()
    var exportTable = templateTable.replace('id="demo-dt-basic"','id="demo-dt-basic-export"')
    $('.export-table').append(exportTable)

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
