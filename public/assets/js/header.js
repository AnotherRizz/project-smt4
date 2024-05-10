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
        btn.classList.remove('btn-warning');
      });
  
      // Menambahkan kelas 'btn-warning' hanya ke tombol yang diklik
      button.classList.add('btn-warning');
    });
  });

// pilihan lapangan

// Ambil tombol-tombol "lapangan 1" dan "lapangan 2"
const lap1Button = document.getElementById('lap1');
const lap2Button = document.getElementById('lap2');

// Ambil gambar-gambar lapangan
const lap1Image = document.getElementById('img1');
const lap2Image = document.getElementById('img2');

// Tambahkan event listener untuk tombol "lapangan 1"
lap1Button.addEventListener('click', function() {
  lap1Button.classList.add('btn-warning')
  lap2Button.classList.remove('btn-warning')
  lap1Image.classList.remove('d-none');
  lap2Image.classList.add('d-none');
});

// Tambahkan event listener untuk tombol "lapangan 2"
lap2Button.addEventListener('click', function() {
    // Tampilkan gambar lapangan 2 dan sembunyikan gambar lapangan 1
    lap2Button.classList.add('btn-warning')
    lap1Button.classList.remove('btn-warning')
  lap2Image.classList.remove('d-none');
  lap1Image.classList.add('d-none');
});




  

