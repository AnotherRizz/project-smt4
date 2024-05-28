window.onscroll = function(){
    const header = document.querySelector("nav")
    const fixednav = header.offsetTop;

    if(window.pageYOffset > fixednav){
        header.classList.add("blurr")
    }else{
        header.classList.remove("blurr")
    }
}
// tips
const nomor = document.querySelectorAll('.nomor');
document.querySelectorAll("#simple-list-example .btn").forEach(button => {
    button.addEventListener('click', function(e) {
      const idValue = button.id;
      nomor.forEach(element => {
        if (element.id === idValue) {
          element.classList.remove('d-none');
        } else {
          element.classList.add('d-none');
        }
      });
  
      // Menghapus kelas 'btn-primary' dari semua tombol sebelum menambahkannya ke tombol yang diklik saat ini
      document.querySelectorAll("#simple-list-example .btn").forEach(btn => {
        btn.classList.remove('btn-secondary');
      });
  
      // Menambahkan kelas 'btn-secondary' hanya ke tombol yang diklik
      button.classList.add('btn-secondary');
    });
  });


//   document.addEventListener('DOMContentLoaded', function() {
//     const imgContainers = document.querySelectorAll('.img-container');
//     const modalImg = document.getElementById('modal-img');
//     const modalImgContent = modalImg.querySelector('img');
//     const modalBackdrop = document.getElementById('modal-backdrop');
//     const closeBtn = document.getElementById('close-btn');

//     imgContainers.forEach(container => {
//         container.addEventListener('click', function() {
//             const imgSrc = this.querySelector('img').src;
//             modalImgContent.src = imgSrc;
//             modalImg.classList.add('show');
//             modalBackdrop.style.display = 'block';
//         });
//     });
//     const closeModal = () => {
//       modalImg.classList.remove('show');
//       modalBackdrop.style.display = 'none';
//   };

//   closeBtn.addEventListener('click', closeModal);
//   modalBackdrop.addEventListener('click', closeModal);
//   modalImg.addEventListener('click', closeModal);
//   modalImgContent.addEventListener('click', (e) => e.stopPropagation());
// });

// cari image yang di klik

// Menunggu sampai DOM sepenuhnya dimuat
document.addEventListener('DOMContentLoaded', function() {
  // Mendapatkan elemen gambar di dalam modal
  const modalImage = document.getElementById('modal-img');

  // Menambahkan event listener pada setiap gambar dalam elemen event
  document.querySelectorAll('#event img').forEach(img => {
    img.addEventListener('click', function() {
     
      // Mengubah sumber gambar dalam modal dengan gambar yang diklik
      modalImage.src = this.src;

      // Menampilkan modal menggunakan Bootstrap (asumsi Anda menggunakan Bootstrap)
      const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
      modal.show();
    });
  });
});








  
