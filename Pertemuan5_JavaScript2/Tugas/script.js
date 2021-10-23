function myFunction() {
    let x = document.getElementById("nama-siswa").value;
    let text;
    if (x == "") {
        text = "Nama tidak boleh kosong!";
    } else {
        text = "Data berhasil ditambahkan";
    }
    document.getElementById("demo").innerHTML = text;
}

function myFunction2() {
    let jumlahKarakter = document.getElementById("no-telepon");
    const batasKarakter = 12;
    let text;
    if (jumlahKarakter.value.length > batasKarakter) {
        text = "Jumlah karakter no telepon melebihi 12 angka!"
    } else {
        text = "Data berhasil ditambahkan";
    }
    document.getElementById("demo2").innerHTML = text;
}

function myFunction3() {
    let y = document.getElementById("no-siswa").value;
    let text;
    if (isNaN(y) || y < 1 || y > 30) {
        text = "No absen salah! (melebihi range 1 - 30)"
    } else {
        text = "No absen berhasil ditambahkan";
    }
    document.getElementById("demo3").innerHTML = text;
}