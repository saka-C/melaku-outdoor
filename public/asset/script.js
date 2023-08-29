const burger = document.querySelector('.burger');
const navLinks = document.querySelector('.nav-links');

burger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});


const navbar = document.querySelector(".navbar");

// ================ TOMBOL TAMBAH ===================
  const quantityInput = document.getElementById("hasilQuantity");
  const durationInput = document.getElementById("hasilDuration");
  const tambahQuantityBtn = document.getElementById("tambahQuantity");
  const kurangQuantityBtn = document.getElementById("kurangQuantity");
  const tambahDurationBtn = document.getElementById("tambahDuration");
  const kurangDurationBtn = document.getElementById("kurangDuration");
  const resultElement = document.getElementById("result");
  
  let quantity = 0;
  let duration = 0;

  tambahQuantityBtn.addEventListener("click", () => {
    quantity++;
    quantityInput.textContent = quantity;
    calculateResult();
  });
  
  kurangQuantityBtn.addEventListener("click", () => {
    if (quantity > 0) {
      quantity--;
      quantityInput.textContent = quantity;
      calculateResult();
    }
  });

  tambahDurationBtn.addEventListener("click", () => {
    duration++;
    durationInput.textContent = duration;
    calculateResult();
  });
  
  kurangDurationBtn.addEventListener("click", () => {
    if (duration > 0) {
      duration--;
      durationInput.textContent = duration;
      calculateResult();
    }
  });

  function calculateResult() {
    const nom = quantity * duration
    const result = (nom) * 50000;
    const formattedResult = formatNumber(result);
    resultElement.textContent = formattedResult;
  }

  function formatNumber(number) {
    return numeral(number).format('0,0.00');
  }

// ================ SLIDE  ===================
const slides = document.querySelector('.slides');
let slideIndex = 0;

function showSlide(index) {
  slides.style.transform = `translateX(-${index * 100}%)`;
}

function nextSlide() {
  slideIndex = (slideIndex + 1) % 3; // Jumlah slide pada layar lebar
  showSlide(slideIndex);
}

function prevSlide() {
  slideIndex = (slideIndex - 1 + 3) % 3; // Jumlah slide pada layar lebar
  showSlide(slideIndex);
}



const openPopupBtn = document.getElementById('openPopupBtn');
const closePopupBtn = document.getElementById('closePopupBtn');
const popup = document.getElementById('popup');
const rentalForm = document.getElementById('rentalForm');

openPopupBtn.addEventListener('click', () => {
  popup.style.display = 'block';
});

closePopupBtn.addEventListener('click', () => {
  popup.style.display = 'none';
});

rentalForm.addEventListener('submit', (event) => {
  event.preventDefault();
  
  const duration = document.getElementById('duration').value;
  // Lakukan sesuatu dengan durasi penyewaan (misalnya kirim ke server)
  
  // Setelah submit, tutup popup
  popup.style.display = 'none';
});

// ================ TOMBOL TAMBAH ===================




