@extends('layouts.app')

@section('title', 'Simpan Pinjam')

@section('content')
<div class="custom-background py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5 gap-5 flex-wrap">
            <div class="col-md-6 col-12">
                <div class="d-flex align-items-center">
                    <h1 style="font-size: 60px; font-weight: 600; margin-right: 10px;">Koperasi</h1>
                    <img src="images/andIcon.png" alt="" width="100px">
                </div>
                <h1 class="mb-3" style="font-size: 60px; font-weight: 600; ">Simpan Pinjam</h1>
                <p class="mb-3" style="color: #666666;">Koperasi simpan pinjam adalah lembaga keuangan mikro yang
                    memberikan pinjaman modal kepada para anggotanya. Koperasi
                    simpan pinjam seringkali disebut dengan KSP dan Kospin Jasa.</p>
                <a href="" class="btn bg-red-opt text-white px-5 py-2 hover-red"
                    style="font-weight: 500; border-radius: 30px">Ajukan Sekarang</a>
            </div>
            <div class="col-md-6 col-12">
                <img src="/images/personHeader.png" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row my-5">
            <div class="col-lg-3 col-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center flex-column ">
                            <img src="/images/sp1.png" class="mb-3" alt="" style="width: 100px">
                            <h3>Quality KSP</h3>
                            <p class="text-center">Contrary to popular belief, Lorem Ipsum is not simply random text</p>
                            <a href="" class="text-decoration-none text-black" style="font-weight: 600">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center flex-column ">
                            <img src="/images/sp2.png" class="mb-3" alt="" style="width: 100px">
                            <h3>Quality KSP</h3>
                            <p class="text-center">Contrary to popular belief, Lorem Ipsum is not simply random text</p>
                            <a href="" class="text-decoration-none text-red-opt" style="font-weight: 600">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center flex-column ">
                            <img src="/images/sp3.png" class="mb-3" alt="" style="width: 100px">
                            <h3>Quality KSP</h3>
                            <p class="text-center">Contrary to popular belief, Lorem Ipsum is not simply random text</p>
                            <a href="" class="text-decoration-none text-black" style="font-weight: 600">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center flex-column ">
                            <img src="/images/sp4.png" class="mb-3" alt="" style="width: 100px">
                            <h3>Quality KSP</h3>
                            <p class="text-center">Contrary to popular belief, Lorem Ipsum is not simply random text</p>
                            <a href="" class="text-decoration-none text-red-opt" style="font-weight: 600">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center my-5 gap-5 flex-wrap">
            <div class="col-md-6 col-12">
                <h1>Customer <span class="text-red-opt">Feedback</span></h1>
                <div id="customerFeedbackCarousel" class="carousel slide mt-3" data-bs-ride="carousel">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div>
                                <p class="text-secondary">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae possimus nemo
                                    consectetur
                                    doloremque aut dolores facere perspiciatis eius. Atque officiis voluptates quam
                                    veritatis
                                    dignissimos eius exercitationem delectus, harum aliquid voluptatem? Nulla, quis
                                    reprehenderit
                                    laborum voluptate asperiores praesentium porro reiciendis harum veniam odio
                                    quibusdam,
                                    inventore, magni tempora eligendi optio distinctio tempore modi assumenda. Magnam
                                    voluptatum
                                    quis odio cum. Quod excepturi temporibus quibusdam, eius natus debitis ipsa
                                    perspiciatis
                                    libero laudantium, suscipit a quam enim maxime minus odit quas non ad ea eaque!
                                </p>
                                <div class="d-flex justify-content-between mt-5">
                                    <div class="d-flex gap-3 align-items-center">
                                        <img src="images/personIcon.png" alt="Profile" width="50px">
                                        <div>
                                            <h5 class="text-red-opt">Lorem Ipsum</h5>
                                            <h6>Pemerintah Kabupaten</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <div>
                                <p class="text-secondary">
                                    Another feedback goes here. Modify this text to add more feedback or testimonial
                                    from
                                    different customers.
                                </p>
                                <div class="d-flex justify-content-between mt-5">
                                    <div class="d-flex gap-3 align-items-center">
                                        <img src="images/personIcon.png" alt="Profile" width="50px">
                                        <div>
                                            <h5 class="text-red-opt">John Doe</h5>
                                            <h6>CEO Company</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel indicators -->
                    <div class="carousel-indicators d-flex justify-content-end">
                        <button type="button" data-bs-target="#customerFeedbackCarousel" data-bs-slide-to="0"
                            class="active" aria-current="true"></button>
                        <button type="button" data-bs-target="#customerFeedbackCarousel" data-bs-slide-to="1"></button>
                    </div>

                    <!-- Carousel controls -->
                    <button class="carousel-control-prev " type="button" data-bs-target="#customerFeedbackCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#customerFeedbackCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <img src="/images/personTesti.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection
