setTimeout(function () {
    var flashMessage = document.getElementById('flashMessage');
    if (flashMessage) {
        flashMessage.style.display = 'none';
    }
}, 3000);


// document.querySelectorAll("#order .table .btn").forEach(button => {
//     button.addEventListener('click', function(e){     
//         document.querySelectorAll("#order .table .btn").forEach(btn => {
//             btn.classList.add('btn-danger');
//             btn.innerText = 'Belum Bayar';
//             console.log(btn)
//           });     
//           // Menambahkan kelas 'btn-secondary' hanya ke tombol yang diklik
//           button.classList.add('btn-info');
//           btn.innerText = 'Sudah Bayar';
//         });
//     })

document.querySelectorAll('.update-status-btn').forEach(button => {
    button.addEventListener('click', function() {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: "btn btn-success",
              cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
          });
          swalWithBootstrapButtons.fire({
            title: "APakah anda yaki?",
            text: "Merubah status menjadi Sudah Bayar",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Oke",
            cancelButtonText: " cancel!  ",
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
               
              swalWithBootstrapButtons.fire({
                title: "Berhasil",
                text: "Data kamu berhasil diubah",
                icon: "success",
                timer: 2000,
              });
              this.closest('form').submit();
            } else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {
              swalWithBootstrapButtons.fire({
                title: "Cancelled",
                text: "Your imaginary file is safe :)",
                icon: "error"
              });
            }
          });
    });
});

 
// filter option bulan di order

// function filterByMonth() {
//   var selectedMonth = document.getElementById("inputGroupSelect01").value;
//   window.location.href = '<?= site_url("admin/order") ?>/' + selectedMonth;
// }
   
