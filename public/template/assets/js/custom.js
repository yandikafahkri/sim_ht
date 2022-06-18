/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

  // Sweet Alert
  const swal = $('.swal').data('swal');
  if(swal) {
    Swal.fire({
        title: 'Berhasil',
        text: swal,
        icon: 'success'
    })
  }

  $(document).on('click', 'btn-hapus', function(e) {
//hentikan aksi default
e.preventDefault();
const href = $(this).attr('href');

    Swal.fire({
        title: 'Data akan dihapus?',
        text: "Data yang dihapus tidak bisa dibatalkan!",
        icon: 'warning',
        showCancelButton: true, 
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus!'
      }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
        }
      })

  })
"use strict";
