@extends('layout/index2')
@section('content2')
        <!-- filter obat -->
        <div class="search">
            <input class="form-control" id="choices-text-preset-values" type="text" placeholder="Cari obat, vitamin, atau kategori..." />
            <button class="btn btn-primary" type="button">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <div class="Judul">
            <h1>Obat & Vitamin Berdasarkan Kategori</h1>
        </div>
        <div class="filter">
            <div class="filter2">
                <label class="Check">Obat & perawatan
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="Check">Kesehatan Seksual
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="Check">Vitamin & Suplemen
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="Check">Asma 
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="Check">Ibu & Anak
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="Check">Kecantikan
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="Check">Kesehatan Jantung
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="Check">Diabetess
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
            </div>

        </div>
        
        
        <!-- Content -->
        <!-- Products Grid -->
        <div class="products-grid">
            @foreach($obats as $obat)
            <div class="product-card">
                <div class="product-img">
                    <!-- Sesuaikan field dengan database -->
                    <img src="{{ asset('storage/' . $obat->gambar_obat) }}" alt="{{ $obat->nama_obat }}">
                </div>
                <div class="product-content">
                    <div class="product-category">{{ $obat->kategori }}</div>
                    <div class="product-name">{{ $obat->nama_obat }}</div>
                    <div class="product-price">{{ $obat->jenis_obat }}</div>
                    <button class="add-to-cart">
                        <i class="fa-solid fa-circle-info"></i>Informasi Produk
                    </button>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="pagination">
            {{ $obats->links() }}
        </div>
@endsection
