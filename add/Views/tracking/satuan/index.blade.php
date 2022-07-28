@extends('base.app')
@section('main')

<div class="content__boxed">
    <div class="content__wrap">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Resi / External ID</h5>    
                <form id="form_search" class="row row-cols-lg-12 g-3 align-items-center" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label class="visually-hidden">Masukkan Resi</label>
                        <textarea class="form-control" placeholder="Masukkan nomor Resi disini.." id="resi" name="resi" rows="5">22ara0000068710 22ara0000069159 22ara0000069172 22ara0000069225 22ara0000069961 22ARA0000078903 22ARA0000081466 22ARA0000081810</textarea>
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
            url: '/tracking',
            nama: 'tracking'
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

    $('.page-title').html('Tracking Satuan');
    // $('.lead').html('Trancking kiriman secara mutiple');

    $('#resi').keydown(function(event){
        if(event.keyCode == 13) {
            $("#search").trigger("click");
            event.preventDefault();
            return false;
        }
    });

    $('#search').click(function(){
        $.ajax({
            url: "tracking/list",
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
