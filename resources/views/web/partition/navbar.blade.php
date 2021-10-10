<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
        <img 
        src="{{asset('assets/blanjaloka/img/blanjaloka.png')}}" 
        alt="" 
        width="200">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
        <form class="d-inline-flex flex-fill ms-2 my-auto">
            <input class="search-box form-control" placeholder="Cari Kebutuhan Kamu Disini" aria-label="Search">
            <div class="search ms-1">
            <a class="btn border cai-color-text" type="submit"><i class="bi bi-search"></i></a>
            </div>
        </form>
        
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="btn cai-color-text fs-3 m-1 ms-3" id="keranjang"><i class="bi bi-cart3"></i></a>
            <a class="garisBatas fs-3 text-secondary align-middle me-3">|</a>
            <a class="btn cai-color-text border m-1" id="buttonMasuk" aria-current="page" href="{{url('login')}}">Masuk</a>
            <a class="btn cai-color text-white m-1" id="buttonDaftar" href="{{url('register')}}">Daftar</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
<!-- END OF NAVBAR -->

<script>
//ketika dijalankan di mobile, 
if ($(document).width() <= 988){
    //pindahkan elemen cart ke kiri search-box
    $("#keranjang").insertAfter($(".navbar-brand"));

    //Hapus Garis Pemisah antara Cart dengan loginButton
    $(".garisBatas").remove();
}
</script>