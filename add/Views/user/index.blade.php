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
                        <label for="_dm-staticEmail" class="visually-hidden">Kantor</label>
                        <select id="kantor" name="kantor" class="form-select"></select>
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
<div class="modal fade" id="modaltambah" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="_dm-inputEmail2" class="form-label">Email</label>
                    <input id="_dm-inputEmail2" type="email" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="_dm-inputPassword2" class="form-label">Password</label>
                    <input id="_dm-inputPassword2" type="password" class="form-control">
                </div>

                <div class="col-12">
                    <label for="_dm-inputAddress" class="form-label">Address</label>
                    <input id="_dm-inputAddress" type="text" class="form-control" placeholder="1234 Main St">
                </div>

                <div class="col-12">
                    <label for="_dm-inputAddress2" class="form-label">Address 2</label>
                    <input id="_dm-inputAddress2" type="text" class="form-control" placeholder="Apartment, studio, or floor">
                </div>

                <div class="col-md-6">
                    <label for="_dm-inputCity" class="form-label">City</label>
                    <input id="_dm-inputCity" type="text" class="form-control">
                </div>

                <div class="col-md-2">
                    <label for="_dm-inputZip" class="form-label">Zip</label>
                    <input id="_dm-inputZip" type="text" class="form-control">
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary">Simpan</button>
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
            url: '/user',
            nama: 'User'
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

    $('.page-title').html('User');
    $('.lead').html('Tampilkan untuk pengelolaan user');

    function scrollpage(id) {
        $('html, body, '+id).animate({
            scrollTop: $(id).offset().top-70
        }, 900, function(){

        });
    }

    getKantor();
    function getKantor() {
        $.ajax({
            url: "getKantor",
            type: "post",
            data: "{}",
            dataType: 'JSON',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function () {
                $('#kantor').empty();
            },
            complete: function () {
                
            },
            success: function (data) {
                $('#kantor').append($('<option>', { value: '' }).text('Pilih Kantor'));
                for (var i = 0; i < data.length; i++) {
                    $('#kantor').append($('<option>', { value: data[i].KDNOPEN }).text(data[i].KDNOPEN+' - '+data[i].KETKANTOR));
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {

            }
        });
        $.ajax({
            url: "user/list",
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
    }

    $('#search').click(function(){
        $.ajax({
            url: "user/list",
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

    function modaltambah() {
        $('#modaltambah').modal('show');
    }

    function updatedata(data) {
        console.log(data)
        
    }

</script>
    
@endsection
