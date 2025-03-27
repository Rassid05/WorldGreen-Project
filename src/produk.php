 <style>
        .product-card {
            transition: transform 0.3s ease-in-out;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
    </style>

<section class="bg-light py-5 text-center">
    <div class="container">
        <h1 class="fw-bold">🌱 Produk Ramah Lingkungan</h1>
        <p class="text-muted">Menawarkan solusi berkelanjutan untuk masa depan yang lebih hijau.</p>
    </div>
</section>

<div class="container my-5">
    <div class="row g-4">
        <div class="col-md-4" data-aos="fade-up">
            <div class="card border-0 shadow-sm product-card">
                <img src="gambar/solarp.jpg" class="card-img-top" alt="Solar Panel">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Solar Panel</h5>
                    <p class="text-muted">Solusi energi terbarukan untuk rumah & bisnis Anda.</p>
                    <a href="index.php?page=product-detail" class="btn btn-success btn-sm rounded-pill">Detail</a>
                </div>
            </div>
        </div>

        <div class="col-md-4" data-aos="fade-up">
            <div class="card border-0 shadow-sm product-card">
                <img src="gambar/ev.jpg" class="card-img-top" alt="EV Charging">
                <div class="card-body text-center">
                    <h5 class="fw-bold">EV Charging</h5>
                    <p class="text-muted">Layanan pengisian daya kendaraan listrik cepat & aman.</p>
                    <a href="#" class="btn btn-success btn-sm rounded-pill">Detail</a>
                </div>
            </div>
        </div>

        <div class="col-md-4" data-aos="fade-up">
            <div class="card border-0 shadow-sm product-card">
                <img src="gambar/foodoragnic.jpg" class="card-img-top" alt="Makanan Organik">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Makanan Organik</h5>
                    <p class="text-muted">Produk pangan sehat tanpa pestisida & bahan kimia.</p>
                    <a href="#" class="btn btn-success btn-sm rounded-pill">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-up">
            <div class="card border-0 shadow-sm product-card">
                <img src="gambar/wind.jpg" class="card-img-top" alt="Energi Angin">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Energi Angin</h5>
                    <p class="text-muted">Solusi energi bersih menggunakan tenaga angin.</p>
                    <a href="#" class="btn btn-success btn-sm rounded-pill">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-up">
            <div class="card border-0 shadow-sm product-card">
                <img src="gambar/tshirt.jpg" class="card-img-top" alt="Pakaian Berkelanjutan">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Pakaian Berkelanjutan</h5>
                    <p class="text-muted">Fashion ramah lingkungan dengan bahan daur ulang.</p>
                    <a href="#" class="btn btn-success btn-sm rounded-pill">Detail</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php 
include 'template/footer.php'; 
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
