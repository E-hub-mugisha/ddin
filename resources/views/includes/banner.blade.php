<style>
    .image-cover {
        position: absolute;
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-position: center;
        top: 0;
        left: 0;
        transition: 1s ease-in-out;
    }

    #banner1 {
        display: block;
        opacity: 1;
    }

    #banner2 {
        display: none;
        opacity: 0;
    }

    .counter {
        font-size: 2rem;
        color: white;
        position: absolute;
        top: 20px;
        right: 20px;
        z-index: 10;
    }
</style>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="image-cover hero-header position-relative" style="background:#202A4E url('assets/img/banner1.jpg') no-repeat;">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="elcoss-excort mb-5">
                                <h1 class="mb-4 text-light" style="font-size: xx-large;">Empower Your Business Nationwide with a <span style="color: #F8882B;">Our Decentralized Agent Network.</span></h1>
                                <!-- <p class="fs-5 fw-light text-light fs-mob">This network comprises decentralized agents strategically positioned throughout the market, working collaboratively to achieve their objectives.</p> -->
                                <div class="row">
                                    <div class="col-md-6 wow animated fadeInUp">
                                        <h3 class="fs-1" style="color:#FFF; font-size:larger;"><span class="ctr me-1">4200</span>+</h3>
                                        <p class="fs-sm font--medium mb-0 text-light">Current Agent Network</p>
                                    </div>
                                    <div class="col-md-6 wow animated fadeInUp">
                                        <div class="card-body">
                                            <h3 class="fs-1" style="color:#FFF; font-size:larger;"><span class="ctr me-1">6900</span>+</h3>
                                            <p class="fs-sm font--medium mb-0 text-light">Target network 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btns-clasic mt-5 mb-3">
                                <div class="btn-groupss">
                                    <a href="/services" class="btn btn-lg btn-success border-light font--medium px-lg-4 px-xl-5 mx-2 my-2">How It Work</a>
                                    <a href="/became-an-agent" class="btn btn-lg btn-whites text-success font--medium px-lg-4 px-xl-5 mx-2 my-2">Became an agent<i class="fa-solid fa-circle-play ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-xl-offset-1 col-lg-offset-1">
                            <div class="position-relative wow animated fadeInRight">
                                <img class="d-block position-relative z-2 img-fluid" src="{{ asset('assets/img/image_banner.png')}}" alt="Nicolas Black">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="image-cover hero-header position-relative" style="background:#202A4E url('assets/img/banner2.jpg') no-repeat;">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="elcoss-excort mb-5">
                                <h1 class="mb-4 text-light"><span style="color: #F8882B;">Business Network</span> <br />that gives you an advantage over your rivals</h1>
                                <!-- <p class="fs-5 fw-light text-light fs-mob">This is the description for the second banner, highlighting different features or aspects of the service.</p> -->
                            </div>
                            <div class="btns-clasic mt-5 mb-3">
                                <div class="btn-groupss">
                                    <a href="/services" class="btn btn-lg btn-success border-light font--medium px-lg-4 px-xl-5 mx-2 my-2">How It Work</a>
                                    <a href="/became-an-agent" class="btn btn-lg btn-whites text-success font--medium px-lg-4 px-xl-5 mx-2 my-2">Became an agent<i class="fa-solid fa-circle-play ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-xl-offset-1 col-lg-offset-1">
                            <div class="position-relative wow animated fadeInRight">
                                <img class="d-block position-relative z-2 img-fluid" src="{{ asset('assets/img/about.png')}}" alt="Another Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="image-cover hero-header position-relative" style="background:#202A4E url('assets/img/banner2.jpg') no-repeat;">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="elcoss-excort mb-5">
                                <h1 class="mb-4 text-light" style="font-size: xx-large;">Join DDIN and connect with a <span style="color: #F8882B;">Network of the Best</span>, where excellence is the standard and innovation drives success.</h1>
                                <!-- <p class="fs-5 fw-light text-light fs-mob">This is the description for the second banner, highlighting different features or aspects of the service.</p> -->
                            </div>
                            <div class="btns-clasic mt-5 mb-3">
                                <div class="btn-groupss">
                                    <a href="/services" class="btn btn-lg btn-success border-light font--medium px-lg-4 px-xl-5 mx-2 my-2">How It Work</a>
                                    <a href="/became-an-agent" class="btn btn-lg btn-whites text-success font--medium px-lg-4 px-xl-5 mx-2 my-2">Became an agent<i class="fa-solid fa-circle-play ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-xl-offset-1 col-lg-offset-1 order-first">
                            <div class="position-relative wow animated fadeInRight">
                                <img class="d-block position-relative z-2 img-fluid" src="{{ asset('assets/img/image4.png')}}" style="width: 30rem; height: 38rem;" alt="Another Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span>Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span>Next</span>
    </button>
</div>

<script>
    let currentBanner = 1;

    function showNextBanner() {
        let banner1 = document.getElementById('banner1');
        let banner2 = document.getElementById('banner2');

        if (currentBanner === 1) {
            banner1.style.opacity = '0';
            banner2.style.display = 'block';
            setTimeout(() => {
                banner1.style.display = 'none';
                banner2.style.opacity = '1';
            }, 1000);
            currentBanner = 2;
        } else {
            banner2.style.opacity = '0';
            banner1.style.display = 'block';
            setTimeout(() => {
                banner2.style.display = 'none';
                banner1.style.opacity = '1';
            }, 1000);
            currentBanner = 1;
        }
    }

    setInterval(showNextBanner, 5000);

    document.addEventListener('DOMContentLoaded', function() {
        var counterElement = document.getElementById('counter');
        var counter = 0;

        setInterval(function() {
            counter++;
            counterElement.innerText = counter;
        }, 1000); // Increase counter every 1 second (1000 milliseconds)
    });
</script>