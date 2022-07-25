@extends('base.app')
@section('main')
    <div class="content__boxed">
        <div class="content__wrap">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Filter Data</h5>
                    <form id="form_search" class="row row-cols-lg-4 g-3 align-items-center" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label for="_dm-staticEmail">Kantor</label>
                            <select id="kantor" name="kantor" class="form-select"></select>
                        </div>
                        <div class="col-12">
                            <br>
                            <button type="button" class="btn btn-primary" id="search">Cari</button>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div id="list"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        getKantor();

        var breadCrumb = [{
                url: '/',
                nama: 'Home'
            },
            {
                url: '#',
                nama: 'Main'
            },
            {
                url: '/pelanggan',
                nama: 'Pelanggan'
            }
        ]
        setBreadCrumb(breadCrumb);

        function setBreadCrumb(path) {
            let currentPage = ''
            $('ol.breadcrumb').html('')
            $.each(path, function(i, v) {
                if (v.url != '#') {
                    $('ol.breadcrumb').append(`<li class="breadcrumb-item"><a href="` + v.url + `">` + v.nama +
                        `</a></li>`)
                } else {
                    $('ol.breadcrumb').append(`<li class="breadcrumb-item">` + v.nama +
                        `</li>`)
                }
                $('h1.page-title').text(v.nama)
                currentPage = v.nama
            })
            $('ol.breadcrumb').children('li:last-child').addClass('active')
            $('ol.breadcrumb').children('li:last-child').attr('aria-current', 'page')
            $('ol.breadcrumb').children('li:last-child').html(currentPage)
        }

        $('.page-title').html('Transaksi');
        $('.lead').html('Tampilkan untuk');

        $('#search').click(function() {


            var idkantor = $('#kantor').val()

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "pelanggan/list",
                type: "POST",
                data: {
                    idkantor: idkantor
                },
                beforeSend: function() {
                    $('.loader').show()
                },
                complete: function() {
                    $('.loader').hide()
                    scrollpage('#list');
                },
                success: function(response) {
                    $('#list').html('');
                    $('#list').html(response);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('.loader').attr('hidden', true)
                    $("#pro_msginfo").html("Error, Sedang terjadi kesalahan..");
                }
            });

        })

        function getKantor() {
            $.ajax({
                url: "getKantor",
                type: "post",
                data: "{}",
                dataType: 'JSON',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function() {
                    $('#kantor').empty();
                },
                complete: function() {

                },
                success: function(data) {
                    $('#kantor,#kantor_add,#ekantor_add').append($('<option>', {
                        value: ''
                    }).text('Pilih Kantor'));
                    for (var i = 0; i < data.length; i++) {
                        $('#kantor,#kantor_add,#ekantor_add').append($('<option>', {
                            value: data[i].KDNOPEN
                        }).text(data[i].KDNOPEN + ' - ' + data[i].KETKANTOR));
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {

                }
            });
        }
    </script>
@endsection
