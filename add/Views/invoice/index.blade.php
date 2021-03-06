@extends('base.app')
@section('main')

<div class="content__boxed">
    <div class="content__wrap">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Filter Data</h5>    
                <form id="form_search" class="row row-cols-lg-4 g-3 align-items-center" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label for="_dm-staticEmail" class="visually-hidden">Range Tanggal</label>
                        <input type="text" class="form-control" id="rangetanggal" name="rangetanggal" placeholder="Masukkan range tanggal disini..">
                    </div>
                    <div class="col-12">
                        <label for="_dm-inputPassword" class="visually-hidden">Id Customer</label>
                        <input type="password" class="form-control" id="idcustomer" name="idcustomer" placeholder="Masukkan id customer..">
                    </div>
                    <div class="col-12">
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
    var breadCrumb = [
        {
            url: '/',
            nama: 'Home'
        },
        {
            url: '/invoice',
            nama: 'Invoice'
        }
    ]
    setBreadCrumb(breadCrumb);
    function setBreadCrumb(path) {
        let currentPage = ''
        $('ol.breadcrumb').html('')
        $.each(path, function (i, v) {
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

    $('.page-title').html('Invoice');
    $('.lead').html('Tampilkan untuk');

    $('#search').click(function(){
        $.ajax({
            url: "invoice/list",
            type: "POST",
            data: $('#form_search').serialize(),
            beforeSend: function () {
                $('.loader').show()
            },
            complete: function(){
                $('.loader').hide()
                scrollpage('#list');
            },
            success: function (response) {
                $('#list').html('');
        	    $('#list').html(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $('.loader').attr('hidden',true)
                $("#pro_msginfo").html("Error, Sedang terjadi kesalahan..");
            }
        });

        })



</script>
    
@endsection
