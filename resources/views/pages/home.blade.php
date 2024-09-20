@extends('layouts.app')

@section('title', 'Home')

@section('content')
{{-- Hero Section --}}
<div class="hero">
    {{-- content --}}
    <div class="px-3">
        <div class="text-center ">
            <h1>BUMDES Desa Sumberpucung</h1>
            <h1>Kecamatan Sumberpucung,</h1>
            <h1>Kabupaten Malang</h1>
        </div>
        <div class="text-center text-yellow-secondary">
            Dukudan dan kedatangan Anda tidak hanya menciptakan pengalaman <br> bermakna, tetapi juga memberdayakan
            ekonomi
            lokal.
        </div>
    </div>
</div>
{{-- About --}}
<div class=" about-section">
    <div class="container">
        <div class="d-flex gap-3 mb-3 flex-lg-row flex-column">
            <div class="col-lg-4 col-12">
                <h2 class="text-center text-lg-end">Menuju desa maju berkelanjutan untuk <br><strong>kesejahteraan dan
                        kemandirian</strong>
                </h2>
            </div>
            <div class="col-lg-8 col-12">
                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim mi sapien,
                    non blandit mi ultricies non. In
                    fringilla pellentesque felis, ut blandit risus efficitur congue. In a elementum turpis. Aliquam
                    pretium et nisi a
                    sagittis. Sed aliquet neque at tortor aliquam, quis rutrum eros tincidunt. Fusce at tempor mi, a
                    rutrum nunc. Nulla
                    scelerisque dui at viverra aliquam. Nam sed auctor tellus. Maecenas ultrices,
                </p>
                <p class="">lacus justo condimentum nisl, in congue lorem diam sed eros. Sed justo justo, facilisis sit
                    amet arcu feugiat, congue
                    auctor ex. Sed eget nisl quis augue volutpat accumsan.
                </p>
            </div>
        </div>
        <h2 class="text-red text-center mb-3">Pencapaian Pembangunan Berkelanjutan</h2>
        <div class="row ">
            @for ($i = 0; $i < 6; $i++) <div class="col-4 col-md-2 mb-3">
                <img src="{{ asset('images/container' . ($i+1) . '.png') }}" alt="Image {{ $i }}" class="img-fluid">
        </div>
        @endfor
    </div>
</div>
</div>


{{-- Video --}}
<div class="my-5 container d-none d-lg-block">
    <div class="d-flex w-full " style="position: relative;">
        <div class="text-white p-5"
            style="height: fit-content; background: #4F6839; background-image: url('images/background.png'); background-repeat: repeat; background-size: 1100px auto; width: 40%; z-index: 2; position: relative; margin-right: -50px;">
            <h1 class="mb-0" style="font-size: 36px; font-weight: 300;">Desa</h1>
            <h1 style="font-size: 36px; font-weight: 600;">Sumberpucung</h1>
            <p>Dengan misi pemberdayaan ekonomi
                dan sosial budaya masyarakat,
                pengembangan Desa Maju
                Pentingsari diarahkan pada upaya-
                upaya pelestarian lingkungan dan
                budaya secara berkelanjutan
            </p>
            <a href="" class="bg-yellow text-white nav-link px-5 py-3 d-block mx-auto mx-md-0 text-center"
                style="width: fit-content">
                MORE >>>
            </a>

        </div>
        <div class="w-100" style="z-index: 1; position: relative;">
            <div class="text-end">
                <h5 class="mb-0">Desa Sumberpucung - Malang</h5>
                <h1 class="mb-4 text-green" style="font-size: 36px; font-weight: 600">History of Sumberpucung village
                </h1>
            </div>
            <iframe style="width: 100%;" height="566" src="https://www.youtube.com/embed/sPWv9mOBwck" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
</div>

<div class="my-5 container d-block d-lg-none">
    <div class="w-full " style="position: relative;">
        <div class="text-white p-5 mb-5"
            style="height: fit-content; background: #4F6839; background-image: url('images/background.png'); background-repeat: repeat; background-size: 1100px auto; width: 100%; z-index: 2; position: relative; margin-right: -50px;">
            <h1 class="mb-0" style="font-size: 36px; font-weight: 300;">Desa</h1>
            <h1 style="font-size: 36px; font-weight: 600;">Sumberpucung</h1>
            <p>Dengan misi pemberdayaan ekonomi
                dan sosial budaya masyarakat,
                pengembangan Desa Maju
                Pentingsari diarahkan pada upaya-
                upaya pelestarian lingkungan dan
                budaya secara berkelanjutan
            </p>
            <a href="/about" class="btn bg-yellow text-white px-5 py-3" style="border-radius: 0px; font-size: 18px">MORE
                >>></a>
        </div>
        <div class="w-100" style="z-index: 1; position: relative;">
            <div class="text-center">
                <h5 class="mb-0" style="font-size: 15px">Desa Sumberpucung - Malang</h5>
                <h1 class="mb-4 text-green" style="font-size: 20px; font-weight: 600">History of Sumberpucung village
                </h1>
            </div>
            <iframe style="width: 100%;" height="566" src="https://www.youtube.com/embed/sPWv9mOBwck" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
</div>


{{-- Statistic --}}
<div class=""
    style="height: 366;background: #FFEB86;background-image: url('images/background.png'); background-repeat: repeat; background-size: 1100px auto;">
    <div class="container-fluid d-flex p-5 gap-5 flex-wrap">
        <div class="text-red text-center text-lg-end col-lg-3 col-12">
            <p style="font-size: 20px">Bingung Mengelola Uang?</p>
            <h3 style="font-weight: 600">Kini telah tersedia Koperasi Simpan Pinjam (KSP)</h3>
            <p style="color: #4F6839">di Desa Sumberpucung</p>
        </div>
        <div class="col-12 col-lg-8 d-flex flex-column flex-lg-row justify-content-between align-items-center">
            <div class="text-red d-flex flex-column justify-content-center align-items-center">
                <img src="images/icon3.png" alt="" style="width: 50px">
                <h3 class="text-black counter" style="font-weight: bolder" data-target="390">0</h3>
                <p class="text-center">Orang/jiwa terbantu</p>
            </div>
            <div class="text-red d-flex flex-column justify-content-center align-items-center">
                <img src="images/icon1.png" alt="" style="width: 50px">
                <h3 class="text-black counter" style="font-weight: bolder" data-target="100" data-type="percent">0%</h3>
                <p class="text-center">Mengelola dengan amanah</p>
            </div>
            <div class="text-red d-flex flex-column justify-content-center align-items-center pt-4">
                <img src="images/icon2.png" alt="" style="width: 50px">
                <h3 class="text-black counter" style="font-weight: bolder" data-target="11">0</h3>
                <p class="text-center">Tahun dikelola secara mandiri <br> dan demokratis</p>
            </div>
        </div>
    </div>
</div>

{{-- E catalog --}}
<div class="my-5">
    <div class="container ">
        <p class="text-center" style="font-size: 20">Cari kebutuhan anda di</p>
        <h2 class="text-center mb-5"><span style="font-weight: bold;">E-Katalog</span> Desa Sumberpucung
        </h2>

        <div class="row">
            @for ($i = 0; $i < 3; $i++) <div class="col-lg-4 mb-3">
                <div class="card">
                    <img src="{{ asset('images/food.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3 class="card-title">Sayuran</h3>
                            <a href="/e-catalog" class=" bg-red-opt text-white btn beli px-4"
                                style="border-radius: 30px">Beli</a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                @for ($star = 1; $star <= 5; $star++) <img src="{{ asset('images/star.png') }}"
                                    alt="Star" style="width: 20px">
                                    @endfor
                            </div>
                            <h3 style="font-weight: bold">Rp.7000</h3>
                        </div>
                    </div>
                </div>
        </div>
        @endfor
    </div>
</div>
</div>

<div class="mt-5"
    style="background: #EAF6E3;background-image: url('images/background.png'); background-repeat: repeat; background-size: 1100px auto;">
    <div class="container pt-5">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="col-12 col-lg-5 text-center text-lg-start mb-3">
                <h5 style="font-weight: 600;" class="text-red">PENGALAMAN WISATAWAN</h5>
                <h1 style="font-size: 36px; font-weight: 600;">
                    Kesan dari mereka yang pernah singgah
                </h1>
            </div>
            <div class="card col-10 mb-3 col-lg-4 mx-auto">
                <div class="card-body">
                    <div class="d-flex gap-2">
                        <img src="/images/personIcon.png" alt="" style="width: 40px;height: 40px;">
                        <div>
                            <p class="text-red-opt mb-0" style="font-weight: 600">Lorem Ipsum</p>
                            <p style="font-size: 14px">People Desa Lain</p>
                        </div>
                    </div>
                    <blockquote class="blockquote p-2">
                        <p class="mb-0 text-uppercase " style="font-weight: 600">"Desa Sumberpucung: alam indah, budaya
                            kaya, kuliner lezat, pengalaman autentik."</p>
                    </blockquote>
                    <div class="d-flex justify-content-center mb-3">
                        <img class="" src="/images/vector.png" alt="" width="200px">
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center col-lg-3">
                <img src="{{ asset('images/person1.png') }}" alt="" style="width: 200px;">
            </div>
        </div>
    </div>
</div>


<script>
    function animateCounter(element, target, duration, isPercent) {
        const startTime = performance.now();
        const startValue = 0;
        const targetValue = parseInt(target);
        const durationMs = parseInt(duration);

        function updateCounter(currentTime) {
            const elapsedTime = currentTime - startTime;
            const progress = Math.min(elapsedTime / durationMs, 1);
            const currentValue = Math.floor(progress * (targetValue - startValue) + startValue);

            if (isPercent) {
                element.textContent = currentValue + '%';
            } else {
                element.textContent = currentValue;
            }

            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            }
        }
        requestAnimationFrame(updateCounter);
    }

    // Fungsi untuk memulai animasi ketika elemen masuk ke viewport
    function startCounterAnimation(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) { // Ketika elemen terlihat di viewport
                const counter = entry.target;
                const targetValue = counter.getAttribute('data-target');
                const isPercent = counter.getAttribute('data-type') === 'percent';
                animateCounter(counter, targetValue, 1250, isPercent);
                observer.unobserve(counter); // Stop memantau elemen setelah animasi dimulai
            }
        });
    }

    // Inisialisasi Intersection Observer
    const observer = new IntersectionObserver(startCounterAnimation, {
        threshold: 0.5 // Hanya memulai animasi ketika 50% elemen terlihat
    });

    // Mendaftarkan setiap elemen counter untuk dipantau oleh observer
    window.onload = function() {
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            observer.observe(counter);
        });
    };
</script>
@endsection
