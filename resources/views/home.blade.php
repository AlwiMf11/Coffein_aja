@extends('layouts.app')

@section('title', 'Kopibro - Ngopi Sek, Ben Pikiran Luwih Adem')

@section('content')

{{-- HERO SECTION --}}
<section class="hero-section d-flex align-items-center">
    <div class="container text-center text-lg-start">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <span class="badge kopibro-badge mb-3">Kedai Kopi Khas Jawa</span>
                <h1 class="hero-title">Ngopi Sek,<br>Ben Pikiran Luwih Adem</h1>
                <p class="hero-subtitle">
                    Kopibro ngadeg saka roso tresno marang kopi lokal lan crita-crita
                    sing lahir saka sak cangkir kopi. Rasa lokal, suasana nyaman,
                    kanggo sedulur kabeh sing kepengin leren sedhela.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
                    <a href="#menu" class="btn kopibro-btn-primary btn-lg">Lihat Menu</a>
                    <a href="#about" class="btn kopibro-btn-outline btn-lg">Tentang Kopibro</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ABOUT SECTION --}}
<section id="about" class="about-section py-5">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-image-wrap">
                    <img src="{{ asset('images/about-kopibro.jpg') }}" alt="Suasana Kopibro" class="img-fluid rounded-4 about-image">
                </div>
            </div>
            <div class="col-lg-6">
                <span class="section-label">Sak Cangkir Kopi, Sak Cerita</span>
                <h2 class="section-title mb-3">Tentang Kopibro</h2>
                <p class="section-text">
                    Kopibro lair saka kepengin nguri-uri budaya ngopi khas Jawa
                    lan nggawa rasa lokal menyang generasi modern. Saben cangkir
                    kopi sing disuguhke kanggo sedulur, ngandhut crita saka petani
                    kopi Nusantara nganti tangan barista sing ngracik kanthi tresno.
                </p>
                <p class="section-text">
                    Ing Kopibro, sedulur ora mung ngopi, nanging uga bisa ngrasakke
                    swasana omah, adem, lan ayem kaya lagi kumpul karo konco lawas.
                    Tempat ngopi santai bareng konco, tansah mbukak lawang kanggo
                    sapa wae sing kepengin mampir.
                </p>
                <div class="row mt-4 g-3">
                    <div class="col-6">
                        <div class="about-stat">
                            <h3>100%</h3>
                            <p class="mb-0">Kopi Lokal Nusantara</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="about-stat">
                            <h3>Sedulur</h3>
                            <p class="mb-0">Pelayanan Kaya Konco</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- MENU SECTION --}}
<section id="menu" class="menu-section py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <span class="section-label">Racikan Kopibro</span>
            <h2 class="section-title">Menu Kopibro</h2>
            <p class="section-subtitle mx-auto">
                Kopi lan crita, tansah cedhak neng ati. Iki dhaftar racikan
                sing siap nemenin dinamu.
            </p>
        </div>

        <ul class="nav nav-pills justify-content-center mb-5 menu-tabs" id="menuTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#tab-kopi" type="button">Kopi</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-non-kopi" type="button">Non Kopi</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-makanan" type="button">Makanan</button>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab-kopi">
                <div class="row g-4">
                    @forelse ($coffee as $item)
                        @include('partials.menu-card', ['item' => $item])
                    @empty
                        <p class="text-center text-muted">Menu kopi during ono, mangke disusul nggih.</p>
                    @endforelse
                </div>
            </div>
            <div class="tab-pane fade" id="tab-non-kopi">
                <div class="row g-4">
                    @forelse ($nonCoffee as $item)
                        @include('partials.menu-card', ['item' => $item])
                    @empty
                        <p class="text-center text-muted">Menu non kopi during ono, mangke disusul nggih.</p>
                    @endforelse
                </div>
            </div>
            <div class="tab-pane fade" id="tab-makanan">
                <div class="row g-4">
                    @forelse ($food as $item)
                        @include('partials.menu-card', ['item' => $item])
                    @empty
                        <p class="text-center text-muted">Menu makanan during ono, mangke disusul nggih.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>

{{-- SIGNATURE PRODUCT SECTION --}}
@if ($signature)
<section id="signature" class="signature-section py-5">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2">
                <img src="{{ $signature->image ? asset('storage/'.$signature->image) : asset('images/signature-placeholder.jpg') }}"
                     alt="{{ $signature->name }}" class="img-fluid rounded-4 signature-image">
            </div>
            <div class="col-lg-6 order-lg-1">
                <span class="section-label">Produk Andalan</span>
                <h2 class="section-title mb-3">{{ $signature->name }}</h2>
                <p class="section-text">{{ $signature->description }}</p>
                <p class="signature-price">Rp {{ number_format($signature->price, 0, ',', '.') }}</p>
                <a href="#contact" class="btn kopibro-btn-primary btn-lg">Pesen Saiki</a>
            </div>
        </div>
    </div>
</section>
@endif

{{-- GALLERY SECTION --}}
<section id="gallery" class="gallery-section py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <span class="section-label">Suasana Kopibro</span>
            <h2 class="section-title">Galeri</h2>
            <p class="section-subtitle mx-auto">
                Kumpulan kenangan lan swasana adem neng Kopibro, saka
                sudut warung nganti sedulur sing padha ngopi bareng.
            </p>
        </div>
        <div class="row g-3">
            <div class="col-6 col-lg-4">
                <img src="{{ asset('images/gallery-1.jpg') }}" alt="Suasana Kopibro 1" class="img-fluid rounded-3 gallery-img">
            </div>
            <div class="col-6 col-lg-4">
                <img src="{{ asset('images/gallery-2.jpg') }}" alt="Suasana Kopibro 2" class="img-fluid rounded-3 gallery-img">
            </div>
            <div class="col-6 col-lg-4">
                <img src="{{ asset('images/gallery-3.jpg') }}" alt="Suasana Kopibro 3" class="img-fluid rounded-3 gallery-img">
            </div>
            <div class="col-6 col-lg-4">
                <img src="{{ asset('images/gallery-4.jpg') }}" alt="Suasana Kopibro 4" class="img-fluid rounded-3 gallery-img">
            </div>
            <div class="col-6 col-lg-4">
                <img src="{{ asset('images/gallery-5.jpg') }}" alt="Suasana Kopibro 5" class="img-fluid rounded-3 gallery-img">
            </div>
            <div class="col-6 col-lg-4">
                <img src="{{ asset('images/gallery-6.jpg') }}" alt="Suasana Kopibro 6" class="img-fluid rounded-3 gallery-img">
            </div>
        </div>
    </div>
</section>

{{-- CONTACT SECTION --}}
<section id="contact" class="contact-section py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <span class="section-label">Mampir Sedhela</span>
                <h2 class="section-title mb-3">Kontak Kopibro</h2>
                <p class="section-text">
                    Ana pitakon, arep pesen akeh, utawa mung kepengin ngobrol
                    soal kopi? Sedulur bisa langsung hubungi Kopibro liwat
                    kontak ing ngisor iki.
                </p>
                <ul class="contact-list list-unstyled">
                    <li><strong>Alamat:</strong> Jl. Kenanga No. 12, Yogyakarta</li>
                    <li><strong>Jam Buka:</strong> Setiap dina, 09.00 - 22.00 WIB</li>
                    <li><strong>Telepon:</strong> 0812-3456-7890</li>
                    <li><strong>Instagram:</strong> @kopibro.id</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="contact-form-card">
                    <h5 class="mb-3">Kirim Pesen</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Jeneng</label>
                            <input type="text" class="form-control" placeholder="Jeneng sedulur">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email sedulur">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pesen</label>
                            <textarea class="form-control" rows="4" placeholder="Tulis pesenmu neng kene..."></textarea>
                        </div>
                        <button type="submit" class="btn kopibro-btn-primary w-100">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
