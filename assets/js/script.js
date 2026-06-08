<<<<<<< HEAD
// alert('Selamat datang di website kami!');
// console.log('Website berhasil dimuat');

let namaPerusahaan = 'PT Maju Jaya Teknologi';

console.log(namaPerusahaan);
function tampilPesan() {
  document.getElementById('info').innerHTML = 'Website ini dibuat dengan HTML, CSS, dan JavaScript.';
}

function gantiWarna() {
  document.body.style.backgroundColor = 'lightblue';
}

function tampilJam() {
  alert(new Date());
}

let form = document.getElementById('formDaftar');

let pesan = document.getElementById('pesan');

form.addEventListener('submit', function (event) {
  event.preventDefault();

  let nama = document.getElementById('nama').value;
let email = document.getElementById('email').value;
let pesan = document.getElementById('pesan');

if (nama == '') {
    pesan.innerHTML = 'Nama wajib diisi';
    pesan.style.color = 'red';

} else if (nama.length < 3) {
    pesan.innerHTML = "Nama harus terdiri dari minimal 3 karakter";
    pesan.style.color = 'red';

} else if (email == '') {
    pesan.innerHTML = 'Email wajib diisi';
    pesan.style.color = 'red';

} else if (!email.includes("@")) {
    pesan.innerHTML = "Email tidak valid";
    pesan.style.color = 'red';

} else {
    pesan.innerHTML = 'Pendaftaran berhasil';
    pesan.style.color = 'green';

    document.getElementById('formDaftar').reset();
}
  // alert("Form diproses");
});

document.getElementById("nama")
.addEventListener("focus", function() {

    console.log("Input nama aktif");

});
=======
alert("Selamat datang di website kami!");
console.log("Website berhasil dimuat");

let namaPerusahaan = "PT M.B.G";
console.log(namaPerusahaan);

function tampilPesan() {
    document.getElementById("info").innerHTML =
    "Website ini dibuat dengan HTML, CSS, dan JavaScript.";
}

let namaPengunjung = prompt("Masukkan nama Anda:");
alert("Halo, " + namaPengunjung);

function gantiWarna() {
    document.body.style.backgroundColor = "lightblue";
}

function tampilJam() {
    alert(new Date());
}

let form = document.getElementById("formDaftar");
let pesan = document.getElementById("pesan");

form.addEventListener("submit", function(event) {
    
    event.preventDefault();

let nama = document.querySelector("input[name='nama']").value;
let email = document.querySelector("input[name='email']").value;

    if(nama == "") {
        pesan.innerHTML = "Nama wajib diisi";
        pesan.style.color = "red";
    }
    else if(nama.length < 3) {
        pesan.innerHTML = "Nama harus minimal 3 karakter";
        pesan.style.color = "red";
    }
    else if(email == "") {
        pesan.innerHTML = "Email wajib diisi";
        pesan.style.color = "red";
    }
    else if(!email.includes("@")) {
        pesan.innerHTML = "Format email tidak valid";
        pesan.style.color = "red";
    }
    else {
        pesan.innerHTML = "Pendaftaran berhasil";
        pesan.style.color = "green";
    }
    
    form.reset();
    
    // alert("Form diproses");

});
        

document.getElementById("nama").addEventListener("focus", function() {
    console.log("Input nama aktif");

});

    





>>>>>>> a2816592aeac034a53f94e506425e0e961cb8475
