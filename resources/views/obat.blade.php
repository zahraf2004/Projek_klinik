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
            <div class="product-card">
                <div class="product-img">
                    <img src="{{ asset('img/VitC.jpeg') }}" alt="Vitamin C">
                </div>
                <div class="product-content">
                    <div class="product-category">Vitamin & Suplemen</div>
                    <div class="product-name">Vitamin C 1000mg</div>
                    <div class="product-price">Tablet</div>
                    <button class="add-to-cart">
                        <i class="fa-solid fa-circle-info"></i>Informasi Produk
                    </button>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-img">
                    <img src="{{ asset ('img/paracetamol.jpeg') }}" alt="Paracetamol">
                </div>
                <div class="product-content">
                    <div class="product-category">Obat & Perawatan</div>
                    <div class="product-name">Paracetamol 500mg</div>
                    <div class="product-price">Tablet</div>
                    <button class="add-to-cart">
                        <i class="fa-solid fa-circle-info"></i>Informasi Produk
                    </button>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-img">
                    <img src="{{asset ('img/Salbutamol.jpeg') }}" alt="Obat Asma">
                </div>
                <div class="product-content">
                    <div class="product-category">Asma</div>
                    <div class="product-name">Salbutamol Inhaler</div>
                    <div class="product-price">Inhaler</div>
                    <button class="add-to-cart">
                        <i class="fa-solid fa-circle-info"></i>Informasi Produk
                    </button>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-img">
                    <img src="{{asset ('img/VitD.jpeg')}}" alt="Vitamin D">
                </div>
                <div class="product-content">
                    <div class="product-category">Vitamin & Suplemen</div>
                    <div class="product-name">Vitamin D3 1000IU</div>
                    <div class="product-price">Tablet</div>
                    <button class="add-to-cart">
                        <i class="fa-solid fa-circle-info"></i>Informasi Produk
                    </button>
                </div>
            </div>
        </div>
@endsection
