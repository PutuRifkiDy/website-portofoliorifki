// fungsi untuk navbar saat tampilan mobile
document.addEventListener("DOMContentLoaded", function() {
    const hamburger = document.getElementById("hamburger");
    const navbar = document.querySelectorAll(".nav");

    hamburger.addEventListener("click", function() {
        navbar.forEach(nav => {
            nav.classList.toggle("active");
        });
    });
});


// validate news letter
function validateEmail() {
    const emailInput = document.getElementById('email').value;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (!emailPattern.test(emailInput)) {
        alert("Please enter a valid email address.");
    } else {
        alert("Thank you for providing a valid email!");
    }
}

// ======================================================= //
// onblur
const nameInput = document.getElementById('nama'); 
nameInput.addEventListener('focus', () => {
  nameInput.style.backgroundColor = "#e0f7fa"; 
});
nameInput.addEventListener('blur', () => {
  nameInput.style.backgroundColor = ""; 
});


// ======================================================= //
// onchange
  document.querySelectorAll('input[name="preferensi_kontak"]').forEach(radio => {
    radio.addEventListener('change', () => {
      alert(`Anda memilih preferensi kontak: ${radio.value}`);
    });
  });

  // Tambahkan event change pada checkbox layanan
  document.querySelectorAll('input[name="layanan"]').forEach(checkbox => {
    checkbox.addEventListener('change', () => {
      if (checkbox.checked) {
        alert(`Anda menambahkan layanan: ${checkbox.value}`);
      } else {
        alert(`Anda menghapus layanan: ${checkbox.value}`);
      }
    });
  });


  //======================================================//
  // ONMOUSECENTER ONMOUSE LEAVE
  const submitButton = document.querySelector('button[type="submit"]');
  submitButton.addEventListener('mouseenter', () => {
    submitButton.style.backgroundColor = "#ffcc80"; 
  });
  submitButton.addEventListener('mouseleave', () => {
    submitButton.style.backgroundColor = ""; 
  });


//========================================================//
// onchange   
const emailContainer = document.getElementById('emailContainer');
const teleponContainer = document.getElementById('teleponContainer');


function updateContactMethod() {
    if (document.getElementById('kontak_email').checked) {
        emailContainer.style.display = 'block';
        teleponContainer.style.display = 'none';
    } else if (document.getElementById('kontak_telepon').checked) {
        emailContainer.style.display = 'none';
        teleponContainer.style.display = 'block';
    }
}

document.getElementById('kontak_email').addEventListener('change', updateContactMethod);
document.getElementById('kontak_telepon').addEventListener('change', updateContactMethod);
updateContactMethod();


//=========================================================//
// form contact
// Tangkap elemen form
const formKontak = document.getElementById('formKontak');
const namaTampilan = document.getElementById('namaSaya');
const emailTampilan = document.getElementById('emailSaya');
const preferensiKontakTampilan = document.getElementById('preferensiKontak');
const daftarLayananTampilan = document.getElementById('daftarLayanan');
const pesanTampilan = document.getElementById('pesanSaya');

// Event untuk Menangani Pengiriman Form
formKontak.addEventListener('submit', function (event) {
    event.preventDefault();

    // Ambil tempat untuk nampilinnya
    const preferensiKontak = formKontak.preferensi_kontak.value;
    const preferensiName = formKontak.nama.value;
    const preferensiEmail = formKontak.email.value;
    const preferensiPesan = formKontak.pesan.value;

    namaTampilan.textContent = `Nama: ${preferensiName}`;
    emailTampilan.textContent = `Email: ${preferensiEmail}`;
    pesanTampilan.textContent = `Pesan: ${preferensiPesan}`;
    preferensiKontakTampilan.textContent = `Preferensi Kontak: ${preferensiKontak}`;

    const layananTerpilih = [];
    document.querySelectorAll('input[name="layanan"]:checked').forEach(layanan => {
        layananTerpilih.push(layanan.value);
    });

    // Tampilkan layanan yang dipilih dalam daftar
    daftarLayananTampilan.innerHTML = '';
    layananTerpilih.forEach(layanan => {
        const listItem = document.createElement('li');
        listItem.textContent = layanan;
        daftarLayananTampilan.appendChild(listItem);
    });

    // Reset form setelah submit
    formKontak.reset();
});
