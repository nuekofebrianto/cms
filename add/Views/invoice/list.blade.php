<div class="row mb-3">
    
    {{-- <div class="col-md-6 d-flex gap-1 align-items-center">
        <button type="button" class="btn btn-primary hstack gap-2 align-self-center" onclick="modaltambah()">
            <i class="demo-psi-add fs-5"></i>
            <span class="vr"></span>
            Tambah User
        </button>
    </div> --}}
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
            <th>Invoice</th>
            <th>User</th>
            <th>Amount</th>
            <th>User</th>
            <th>User</th>
            <th>Amount</th>
            <th>User</th>
            <th>Plan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="#" class="btn-link">Order #53451</a></td>
            <td>Scott S. Calabrese</td>
            <td>$24.98</td>
            <td>Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese</td>
            <td>$24.98</td>
            <td>Scott S. Calabrese</td>
            <td><a href="#" class="btn-link">Scott S. Calabrese</a></td>
            <td><span class="badge bg-success">Bussines</span></td>
        </tr>
        <tr>
            <td><a href="#" class="btn-link">Order #53451</a></td>
            <td>Scott S. Calabrese</td>
            <td>$24.98</td>
            <td>Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese</td>
            <td>$24.98</td>
            <td>Scott S. Calabrese</td>
            <td><a href="#" class="btn-link">Scott S. Calabrese</a></td>
            <td><span class="badge bg-success">Bussines</span></td>
        </tr>
        <tr>
            <td><a href="#" class="btn-link">Order #53451</a></td>
            <td>Scott S. Calabrese</td>
            <td>$24.98</td>
            <td>Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese</td>
            <td>$24.98</td>
            <td>Scott S. Calabrese</td>
            <td><a href="#" class="btn-link">Scott S. Calabrese</a></td>
            <td><span class="badge bg-success">Bussines</span></td>
        </tr>
        <tr>
            <td><a href="#" class="btn-link">Order #53451</a></td>
            <td>Scott S. Calabrese</td>
            <td>$24.98</td>
            <td>Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese Scott S. Calabrese</td>
            <td>$24.98</td>
            <td>Scott S. Calabrese</td>
            <td><a href="#" class="btn-link">Scott S. Calabrese</a></td>
            <td><span class="badge bg-success">Bussines</span></td>
        </tr>
    </tbody>
</table>
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