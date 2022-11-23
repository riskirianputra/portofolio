@inject('gallery', 'App\models\Gallery')
@extends('visitor-layout.main')

@section('content')

<br>
<br>
<br>
<br>
<br>
<br>

<section>
    <div class="container">
        <h5 class="card-title">Kuliner</h5>
        <p class="md-1 gallery">VUE JS</p>
            <div class="card-group">
                <div class="card">
                    <img src="../assets/img/screnshot/Kuliner/Home.png" class="card-img-top" alt="...">
                        <div class="card-body">                            
                            <p class="card-text"><small class="text-muted">Home</small></p>
                        </div>
                </div>
                <div class="card">
                    <img src="../assets/img/screnshot/Kuliner/Keranjang.png" class="card-img-top" alt="...">
                        <div class="card-body">                            
                            <p class="card-text"><small class="text-muted">Keranjang</small></p>
                        </div>
                </div>
                <div class="card">
                    <img src="../assets/img/screnshot/Kuliner/menu.png" class="card-img-top" alt="...">
                        <div class="card-body">               
                            <p class="card-text"><small class="text-muted">Menu</small></p>
                        </div>
                </div>
                <div class="card">
                    <img src="../assets/img/screnshot/Kuliner/menu.png" class="card-img-top" alt="...">
                        <div class="card-body">               
                            <p class="card-text"><small class="text-muted">Menu</small></p>
                        </div>
                </div>
                <div class="card">
                    <img src="../assets/img/screnshot/Kuliner/menu.png" class="card-img-top" alt="...">
                        <div class="card-body">               
                            <p class="card-text"><small class="text-muted">Menu</small></p>
                        </div>
                </div>
            </div>
    </div>
</section>

<br>
<br>
<br>    
<section>
    <div class="container">
        <h5 class="card-title">PPKIJK</h5>
        <p class="md-1 gallery">VUE JS</p>
            <div class="card-group">
                <div class="card">
                    <img src="../assets/img/screnshot/PPKIJK/Home.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            
                            <p class="card-text"><small class="text-muted">Home</small></p>
                        </div>
                </div>
                <div class="card">
                    <img src="../assets/img/screnshot/PPKIJK/Login.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            
                            <p class="card-text"><small class="text-muted">Login</small></p>
                        </div>
                </div>
                <div class="card">
                    <img src="../assets/img/screnshot/PPKIJK/Profile.png" class="card-img-top" alt="...">
                        <div class="card-body">               
                            <p class="card-text"><small class="text-muted">Profil</small></p>
                        </div>
                </div>
            </div>
    </div>
</section>

<br>
<br>
<br>    
<section>
    <div class="container">
        <h5 class="card-title">Kepsek</h5>
        <p class="md-1 gallery">LARAVEL</p>
            <div class="card-group">
                <div class="card">
                    <img src="../assets/img/screnshot/Kepsek/2. Halaman Dashboard.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            
                            <p class="card-text"><small class="text-muted">Home</small></p>
                        </div>
                </div>
                <div class="card">
                    <img src="../assets/img/screnshot/Kepsek/5. Halaman siswa.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            
                            <p class="card-text"><small class="text-muted">Halaman Siswa</small></p>
                        </div>
                </div>
                <div class="card">
                    <img src="../assets/img/screnshot/Kepsek/4. Halaman Pengguna.png" class="card-img-top" alt="...">
                        <div class="card-body">               
                            <p class="card-text"><small class="text-muted">Halaman Pengguna</small></p>
                        </div>
                </div>
            </div>
    </div>
</section>

<br>
<br>
<br>    
<section>
    <div class="container">
        <h5 class="card-title">SPP</h5>
        <p class="md-1 gallery">LARAVEL</p>
            <div class="card-group">
                <div class="card">
                    <img src="../assets/img/screnshot/SPP/halaman dashboard.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                            
                            <p class="card-text"><small class="text-muted">Home</small></p>
                        </div>
                </div>
                <div class="card">
                    <img src="../assets/img/screnshot/SPP/6menu pada tap pembayaran ( tambah pemb).PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                            
                            <p class="card-text"><small class="text-muted">Tambah Pembayaran</small></p>
                        </div>
                </div>
                <div class="card">
                    <img src="../assets/img/screnshot/SPP/5.menu pada tap pembayaran ( transaksi pemb).PNG" class="card-img-top" alt="...">
                        <div class="card-body">               
                            <p class="card-text"><small class="text-muted">Transaksi Pembayaran</small></p>
                        </div>
                </div>
            </div>
    </div>
</section>



@endsection

<style>
.tp-bullet {
    width: 15px;
    height: 15px;
    position: absolute;
    background: rgba(255,255,255,.3);
    cursor: pointer;
}

.image_frame, .wp-caption {
    display: block;
    margin: 0;
    border-width: 20px;
    border-style: solid;
    max-width: 100%;
    line-height: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    text-align: center;
    color: white;
}

.image_frame .image_wrapper, .wp-caption img {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.photo .post-desc-wrapper {
    width: 100%;
    float: none;
    text-align: center;
}

.gallery {

font-family: "Lucida Console";

color: #DAA520;
font-size: 30px;
}

</style>