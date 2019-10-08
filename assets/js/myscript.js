const flashdata = $(".flash-data").data('flashdata');
        if (flashdata) {
          Swal.fire({
            title: 'Data',
            text: 'Berhasil' + flashdata,
            type: 'success'
          });
        }