



const selectElement = document.getElementById('inputGroupSelect01');
const bookingItems = document.querySelectorAll('.booking-item');

function filterBookings() {
  const selectedValue = selectElement.value;
  const currentDate = new Date();
  bookingItems.forEach(item => {
    const bookingDate = new Date(item.getAttribute('data-date'));
    const diffDays = (bookingDate - currentDate) / (1000 * 60 * 60 * 24);
    if (
      (selectedValue == 1 && diffDays < 1 && diffDays >= 0) || 
      (selectedValue == 2 && diffDays < 2 && diffDays >= 1) || 
      (selectedValue == 3 && diffDays < 3 && diffDays >= 2)
    ) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
}

selectElement.addEventListener('change', filterBookings);
filterBookings();



