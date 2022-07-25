<script>
    $(document).ready(function() {
        $('.loader').hide()
    });
    $('#kantor_add').select2({
        dropdownParent: $("#modaltambah")
    });
    $('#ekantor_add').select2({
        dropdownParent: $("#modalubah")
    });
    $('.form-select').select2();
    function alert(msg,icon) {
        Swal.fire({
            icon: icon,
            title: msg,
            showConfirmButton: false,
            timer: 2000
        })
    }
    if(document.getElementById("rangetanggal")){
        new Litepicker({
            element:document.getElementById("rangetanggal"),
            singleMode:!1,
            numberOfMonths:2,
            numberOfColumns:2,
            tooltipText:{one:"day",other:"days"},tooltipNumber:a=>a-1}
        );
    }

    if(document.getElementById("periode")){
        new Litepicker({
            element:document.getElementById("periode"),
            singleMode:!1,
            numberOfMonths:2,
            numberOfColumns:2,
            tooltipText:{one:"day",other:"days"},tooltipNumber:a=>a-1}
        );
    }

    function scrollpage(id) {
        $('html, body, '+id).animate({
            scrollTop: $(id).offset().top-70
        }, 900, function(){

        });
    }
</script>
