<style>

html{
    min-height: 100%;
    position: relative;
}

body {
    /* font-family: 'Montserrat', sans-serif; */
    font-size: 15px;
    padding: 0;
    margin: 0;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

.container {
    padding: 0;
}

/* BACKGROUND */
body::before{
    content: "";
    background-image: url(ASSETS/background.jpg);
    background-size: cover;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    opacity: 0.7;
    z-index: -1;
}

/* NAVBAR */

.navbar {
    padding: 0;
    box-shadow: 0 0 10px 2px #5bc0de;
    background-color: white;
    z-index: 1;
}

.navbar-brand:hover {
    transform: scale(1.07);
    color: #5bc0de;
}

/* LOGIN */
#login #sudah{
    right: 5%;
}

#login #garis{
    padding: 5px;
    margin: 15px 0;
}

#login #login{
    border-radius: 0 25px 0 25px;
}

#login #halaman_kiri{
    box-shadow: 0 0px 15px .1px black;
    z-index: 1;
}

#icon{
    transform: scale(0.4);
    filter: invert(100%) sepia(0%) saturate(0%) hue-rotate(93deg) brightness(103%) contrast(103%);
}

#form-login{
    position: relative;
}
#form-login::before{
    position: absolute;
    top: 9.5%;
    text-align: center;
    padding: 4px;
    color: white;
}

<?php if($pesan == "logout"){ ?>
    #form-login::before{
        content: "Berhasil Logout";
        background-color: rgb(29, 206, 103);
        left: 50%;
        right: 27%;
    }
<?php } if($pesan == "registrasi"){ ?>
    #form-login::before{
        content: "Berhasil Registrasi";
        background-color: rgb(29, 206, 103);
        left: 50%;
        right: 27%;
    }
<?php } if($pesan == "password_salah"){ ?>
    #form-login::before{
        content: "Password Salah";
        background-color: rgb(184, 75, 75);
        left: 47%;
        right: 27%;
    }
<?php } if($pesan == "username_salah"){ ?>
    #form-login::before{
        content: "Email Tidak Terdaftar";
        background-color: rgb(184, 75, 75);
        left: 47%;
        right: 27%;
    }
<?php } if($pesan == "terdaftar"){ ?>
    #form-login::before{
        content: "Email Sudah Terdaftar";
        background-color: rgb(184, 75, 75);
        padding: 8px;
        top: 15%;
        left: 57%;
        right: 20%;
    }
<?php } if($pesan == "belum_login"){ ?>
    #form-login::before{
        content: "Silahkan Login Terlebih Dahulu";
        font-size: .77rem;
        padding: 7px 1px;
        background-color: rgb(184, 75, 75);
        left: 47%;
        right: 27%;
    }
<?php } if($pesan == "failed"){ ?>
    #form-login::before{
        content: "Gagal";
        font-size: .77rem;
        padding: 7px 1px;
        background-color: rgb(184, 75, 75);
        left: 57%;
        right: 27%;
    }
<?php } ?>

/* AKUN REKENING */
#akun-rekening #icon{
    transform: scale(0.6);
    filter: invert(100%) sepia(0%) saturate(0%) hue-rotate(93deg) brightness(103%) contrast(103%);
}
#akun-rekening #garis{
    padding: 3px;
    margin: 8px 0;
}

#akun-rekening #head{
    padding: 0;
    box-shadow: 0 10px 15px -10px #5bc0de;
    background-color: white;
    z-index: 1;
}

#akun-rekening #kiri{
    box-shadow: 0px 5px 15px .1px black;
    background-image: url(assets/patt.png);
    background-repeat: repeat;
    background-size: contain;
}

#akun-rekening #head p{
    text-shadow: #5bc0de 2px 2px 13px;
    font-weight: bolder;
    font-family: 'Roboto', sans-serif;
}

/* HOME */
.menu {
    border-radius: 0 4rem 0 0;
    box-shadow: 5px 10px 15px 0px black;
}

.card {
    border: none;
    background: none;
    cursor: pointer;
}

.card:hover .card-title {
    color: #5bc0de;
    font-weight: 600;
    border-bottom: 1px #5bc0de solid;
}

.card:hover .card-title.white {
    color: white;
}

#main-feature #img {
    transform: scale(1);
}

#img {
    background-image: url(assets/assets/acount.png);
    background-size: cover;
    width: 150px;
    height: 150px;
    transition: transform .3s;
    transform: scale(0.8);
}

.card:hover #main-feature #img {
    transform: scale(1.2);
}

.card:hover #img {
    transform: translate(.5rem, .5rem);
    background-size: cover;
    filter: invert(68%) sepia(71%) saturate(396%) hue-rotate(158deg) brightness(93%) contrast(87%);
}

.card-title {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 1.6rem;
}

#main-feature {
    padding: 50px;
    box-shadow: 10px 0px 35px 0px gray;
    border-radius: 0 125px 125px 0;
}

.card:hover #main-feature {
    background-color: white;
}

/* TABLE */
table {
    font-size: .85rem;
}

.navbar-brand:hover {
    transform: scale(1.07);
    color: #5bc0de;
}

.table-wrapper {
    background: none;
    padding: 0 25px 20px 25px;
    margin: 30px 0;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}

.table-title {
    padding-bottom: 15px;
    background: #646464;
    background-color: rgb(33, 64, 78);
    color: #fff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}

.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}

table.table tr th {
    background-color: #5bc0de;
    color: white;
}

table.table tr th,
table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
}

table.table tr th:first-child {
    width: 60px;
}

table.table tr th:last-child {
    width: 100px;
}

table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}

table.table-striped tbody tr:nth-of-type(even) {
    background-color: #fcfcfc;
}

table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}

table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}

table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
    margin: 0 5px;
}

table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
    outline: none !important;
}

table.table td a:hover {
    color: #5bc0de;
}

table.table td a.edit {
    color: #FFC107;
}

table.table td a.delete {
    color: #F44336;
}

table.table td i {
    font-size: 19px;
}

table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
}

/* CEK REKENING */
#tanggal {
    font-size: .9 rem;
    padding: 0px -20px;
}

#table-head,
#read {
    margin-top: -1rem;
}

#cek-rekening .table-title {
    padding-bottom: 15px;
    padding: 7px 15px;
}

/* TRANSAKSI */
#rekening-tujuan .btn {
    font-size: 16px;
    padding: 7px 5px;
    margin: 0 -8px;
}

#rekening-tujuan .btn i {
    float: left;
    font-size: 20px;
    margin-right: 5px;
}

#rekening-tujuan .btn span {
    float: left;
}

#rekening-tujuan select {
    border: 2px #5bc0de solid;
}

.floating {
    line-height: 25px;
}

#biaya-transfer p {
    background: none;
    border: none;
    padding: 8px 0;
}


/* FORM */

.input {
    background-color: rgb(230, 230, 230);
    font-size: .9rem;
}

/* FOOTER */

footer {
    overflow: hidden;
    position: absolute;
    width: 100%;
    bottom: 0;
    background-color: rgb(71, 71, 71);
    color: rgb(209, 209, 209);
    padding: 5px 0;
    font-size: .9rem;
    text-align: center;
}

</style>