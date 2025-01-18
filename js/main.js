// Toggle menu saat di klik pada mobile dan tablet
document.addEventListener("DOMContentLoaded", function () {
    const menuIcon = document.querySelector(".menu-icon");
    const navbarRoute = document.querySelector(".navbar-route");

    // Ketika menu icon diklik
    menuIcon.addEventListener("click", function () {
        // Toggle class 'show' untuk menampilkan atau menyembunyikan navbar
        navbarRoute.classList.toggle("show");
    });
});



    // fungsi untuk about page
    function menampilkanContentAbout(idKategoriKonten){

        document.getElementById('main-skill').style.display = 'none';
        document.getElementById('rewards').style.display = 'none';
        document.getElementById('education').style.display = 'none';
        document.getElementById(idKategoriKonten).style.display = 'flex';


        document.getElementById('btn-main-skills').classList.remove('active');
        document.getElementById('btn-awards').classList.remove('active');
        document.getElementById('btn-education').classList.remove('active');

        if(idKategoriKonten === 'main-skill'){
            document.getElementById('btn-main-skills').classList.add('active');
        } else if(idKategoriKonten === 'rewards'){
            document.getElementById('btn-awards').classList.add('active');
        } else if(idKategoriKonten === 'education'){
            document.getElementById('btn-education').classList.add('active');
        }

    }
    menampilkanContentAbout('main-skill');



// bagian services
let posisiGeser = 0;
function geserCard(arah) {
    const container = document.querySelector('.contain-services');
    const cardWidth = document.querySelector('.card').offsetWidth + 20; // lebar card + jarak antar card

    if (arah === 'kiri') {
        posisiGeser = posisiGeser + cardWidth;
        if (posisiGeser > 0) {
            posisiGeser = 0;
        }
    } else if (arah === 'kanan') {
        posisiGeser = posisiGeser - cardWidth;
        const maxGeser = -(container.scrollWidth - container.offsetWidth);
        if (posisiGeser < maxGeser) {
            posisiGeser = maxGeser;
        }
    }

    container.style.transform = `translateX(${posisiGeser}px)`;
}



// bagian review
let posisiGeserTestimoni = 0; // Pindahkan ke luar fungsi

function geserCardTestimoni(arah) {
    const container = document.querySelector('.container-card-testimoni');
    const cardWidth = document.querySelector('.card-testimoni').offsetWidth + 16; // lebar card + jarak antar card

    if (arah === 'kiri') {
        posisiGeserTestimoni = posisiGeserTestimoni + cardWidth;
        if (posisiGeserTestimoni > 0) {
            posisiGeserTestimoni = 0;
        }
    } else if (arah === 'kanan') {
        posisiGeserTestimoni = posisiGeserTestimoni - cardWidth;
        const maxGeser = -(container.scrollWidth - container.offsetWidth);
        if (posisiGeserTestimoni < maxGeser) {
            posisiGeserTestimoni = maxGeser;
        }
    }

    container.style.transform = `translateX(${posisiGeserTestimoni}px)`;
}



// bagian milestones
// fungsi untuk membuat card onmouse out on mouse over
function mouseOverMileStones(cardMileStones){
    cardMileStones.style.backgroundColor = '#00489A';
    cardMileStones.style.color = '#ffffff';
}

function mouseOutMileStones(cardMileStones){
    cardMileStones.style.backgroundColor = '#ffffff';
    cardMileStones.style.color = '#000';
}


// bagian card our project
function filterCard(kategori){
    const cards = document.querySelectorAll(".card-ourProject");
    
    // belajar menggunakan perulangan
    for(let i = 0; i < cards.length; i++){
        const cardCategory = cards[i].getAttribute('data-kategori');
        
        if(kategori === 'all' || cardCategory === kategori){
            cards[i].style.display = "grid";
        } else {
            cards[i].style.display = "none";
        }
    }

    document.getElementById("btn-all").classList.remove("active");
    document.getElementById("btn-uiux").classList.remove("active");
    document.getElementById("btn-web").classList.remove("active");
    document.getElementById("btn-api").classList.remove("active");

    if(kategori === "all"){
        document.getElementById("btn-all").classList.add("active");
    } else if(kategori === "UI/UX Design"){
        document.getElementById("btn-uiux").classList.add("active");
    } else if(kategori === "Web Development"){
        document.getElementById("btn-web").classList.add("active");
    } else if(kategori === "API"){
        document.getElementById("btn-api").classList.add("active");
    }
}



// bagian form contact

function highlight(input){
    input.style.backgroundColor = "#a7defa";
}

function removeHighlight(input){
    input.style.backgroundColor = "";
}

function checkInput(input) {
    if (input.value === "") {
        input.style.borderColor = "red";
    } else {
        input.style.borderColor = "white";
    }
}

function changeInputMethod(radio){
    const emailField = document.getElementById("emailField");
    const phoneField = document.getElementById("phoneField");

    if(radio.value === "Email"){
        emailField.style.display = "block";
        phoneField.style.display = "none";
        emailField.setAttribute("placeholder", "Email Address*");
    } else if(radio.value === "Telepon"){
        phoneField.style.display = "block";
        emailField.style.display = "none";
        phoneField.setAttribute("placeholder", "Phone Number*");
    }
}

function validateBeforeSubmit() {
    const emailField = document.getElementById("emailField");
    const phoneField = document.getElementById("phoneField");

    const emailSelected = document.getElementById("kontak_email").checked;
    const phoneSelected = document.getElementById("kontak_telepon").checked;

    // Ambil nilai kontak berdasarkan pilihan radio button
    const contactValue = emailSelected ? emailField.value : phoneField.value;

    if (!contactValue) {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Please fill out all required fields!",
          });
        return false;
    }

    // Validasi format email
    if (emailSelected) {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(emailField.value)) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Please enter a valid email!",
              });
            emailField.style.borderColor = "red";
            return false;
        }
    }

    return true;
}

// function untuk dropdown pada navbar

document.addEventListener("DOMContentLoaded", function () {
    const afterLogin = document.querySelector(".after-login");
    const dropdown = document.querySelector(".dropdown");

    if (afterLogin && dropdown) {
        afterLogin.addEventListener("click", function (e) {
            e.preventDefault(); 
            dropdown.classList.toggle("active"); 
        });

        document.addEventListener("click", function (e) {
            if (!afterLogin.contains(e.target) && !dropdown.contains(e.target)) {
                dropdown.classList.remove("active");
            }
        });
    }
});



