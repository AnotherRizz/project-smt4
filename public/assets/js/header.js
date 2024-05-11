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






  

