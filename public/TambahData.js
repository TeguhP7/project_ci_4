function refresh() {
    var $nim = $('#nim').val('');
    var $nama = $('#nama').val('');
    var $jurusan = $('#jurusan').val('');
    var $alamat = $('#alamat').val('');
    var $error = $('#error').val('');
    var $success = $('#success').val('');

} $('#btnTutup').on('click', function () {
    if ($('#success').is(':visible')) {
        window.location.href = "/";
    }
    $('.alert').hide();
    refresh();
})


$('#btnSimpan').on('click', function () {
    var $nim = $('#nim').val();
    var $nama = $('#nama').val();
    var $jurusan = $('#jurusan').val();
    var $alamat = $('#alamat').val();
    $.ajax({
        type: "POST",
        url: "tambah_data_ajax",
        data: {
            nim: $nim,
            nama: $nama,
            jurusan: $jurusan,
            alamat: $alamat
        },
        success: function (response) {
            var $obj = $.parseJSON(response);
            if ($obj.success == false) {
                $('#success').hide();
                $('.error').show();
                $('.error').html($obj.error);
            } else {
                $('#error').hide();
                $('.success').show();
                $('.success').html($obj.success);
                window.location.refresh();
            }
        }
    });

})

