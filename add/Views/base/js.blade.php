<script>
    $(document).ready(function() {
        $('.loader').hide()
    });
    $('.form-select-modal').select2({
        dropdownParent: $(".modal")
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
</script>
