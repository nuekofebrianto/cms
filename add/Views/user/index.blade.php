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
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3" id="form_user" method="POST" enctype="multipart/form-data">
                <div class="col-md-12">
                    <label for="_dm-inputEmail2" class="form-label">Nippos</label>
                    <div class="input-group">
                        <div class="d-flex align-items-center gap-1 text-nowrap mb-3">
                            <input type="text" class="d-inline-block w-auto form-control" id="nippos" name="nippos" placeholder="Massukan Nippos disini..">
                            {{-- <button class="btn btn-primary" type="button" id="button-search-nippos">Search</button> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Nama</label>
                    <input id="nama" name="nama" type="text" class="form-control" placeholder="Massukan nama disini..">
                </div>
                <div class="col-md-6">
                    <label class="form-label">No. Handphone</label>
                    <input id="nohp" name="nohp" type="text" class="form-control" placeholder="Massukan No handphone disini..">
                </div>
                <div class="col-md-6">
                    <label class="form-label">E-Mail</label>
                    <input id="email" name="email" type="text" class="form-control" placeholder="Massukan E-mail disini..">
                </div>
                <div class="col-md-12">
                    <label class="col-sm-2">Kantor</label>
                    <div class="col-12">
                        <select id="kantor_add" name="kantor_add" style="width: 100%" class="form-select-modal"></select>
                    </div>
                </div>
                <div class="col-md-12">
                    <label class="col-sm-2">Hak Akaes</label>
                    <div class="col-12">
                        <select id="hakakses" name="hakakses" style="width: 100%" class="form-select-modal"></select>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="savebtn">Simpan</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')

<script>
    getKantor();
    getAkses();
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

                $('#kantor_add').append($('<option>', { value: '' }).text('Pilih Kantor'));
                for (var i = 0; i < data.length; i++) {
                    $('#kantor_add').append($('<option>', { value: data[i].KDNOPEN }).text(data[i].KDNOPEN+' - '+data[i].KETKANTOR));
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {

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

    function getAkses() {
        $.ajax({
            url: "getHakakses",
            type: "post",
            data: "{}",
            dataType: 'JSON',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function () {
                $('#hakakses').empty();
            },
            complete: function () {
                
            },
            success: function (data) {
                $('#hakakses').append($('<option>', { value: '' }).text('Pilih Hak Akses'));
                for (var i = 0; i < data.length; i++) {
                    $('#hakakses').append($('<option>', { value: data[i].IDAKSES }).text(data[i].HAK_AKSES));
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {

            }
        });
    }

    function modaltambah() {
        $('#modaltambah').modal('show');
    }

    $("#form_user").validate({
        rules:{
            nippos:{
                required: true 
            },
            nama:{
                required: true 
            },
            nohp:{
                required: true 
            },
            email:{
                required: true
            },
            nopend:{
                required: true
            },
            hakakses:{
                required: true
            }
        },
        messages: {
            nippos: {
                required: "Tidak boleh kosong.."
            },
            nama: {
                required: "Tidak boleh kosong.."
            },
            nohp: {
                required: "Tidak boleh kosong.."
            },
            email: {
                required: "Tidak boleh kosong.."
            },
            nopend: {
                required: "Tidak boleh kosong.."
            },
            hakakses: {
                required: "Tidak boleh kosong.."
            }
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        highlight: function (element, errorClass, validClass) {
        $( element ).closest( ".form-control" ).addClass( "is-invalid" ).removeClass( "is-valid" );
        },
        unhighlight: function (element, errorClass, validClass) {
        $( element ).closest( ".form-control" ).addClass( "is-valid" ).removeClass( "is-invalid" );
        }
    });

    $('#savebtn').click(function(){
        var validator = $("#form_user").validate();
        var is_valid = validator.form();

        if (!is_valid) {
            return;
        }

        Swal.fire({
            title: 'Konfirmasi?',
            showDenyButton: true,
            confirmButtonText: 'Simpan',
            denyButtonText: `Batal`,
        }).then((result) => {
            if (result.isConfirmed) {
                save();
            } else if (result.isDenied) {
                
            }
        })
    })

    function save() {
        $.ajax({
        url: "user/save",
        type: "POST",
        data: $('#form_user').serialize(),
        dataType: 'JSON',
        headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    },
        beforeSend: function () {
            $('.loader').show()
        },
        complete: function(){
            $('.loader').hide()
        },
        success: function (data) {
            if(data.KDRESPON == '00'){
                $('#modaltambah').modal('hide');
                alert(data.KETRESPON,'success');
                $("#form_user").trigger("reset");
                setTimeout(function(){
                    $("#search").trigger("click");
                }, 3000);
            } else {
                alert(data.KETRESPON,'error');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
        	alert('Error! Sedang terjadi kesalahan..','error');
        }
    });
    }

    function updatedata(data) {
        console.log(data)
    }

</script>
    
@endsection
