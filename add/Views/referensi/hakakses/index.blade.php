@extends('base.app')
@section('main')

<div class="content__boxed">
    <div class="content__wrap">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">List Data</h5>
            </div>
            <div class="card-body">
                <div id="list"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
            url: '/hakakses',
            nama: 'Hak Akses'
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

    $('.page-title').html('Hak Akses');
    $('.lead').html('Tampilkan untuk pengelolaan Referensi Hak Akses user');

    getList();
    function getList() {
        $.ajax({
            url: "hakakses/list",
            type: "POST",
            headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        },
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

    function modaltambah() {
        $('#modaltambah').modal('show');
    }

</script>
    
@endsection
