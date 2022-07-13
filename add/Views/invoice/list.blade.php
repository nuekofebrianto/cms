<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">Cell formatting</h5>
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