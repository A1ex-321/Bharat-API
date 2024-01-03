@extends('web.layouts.app')

@section('content')
    <section class="bd-hero__area">

        <div class="hero__active swiper-container">

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bd-singel__hero">
                        <div class="hero__height d-flex align-items-center p-relative">
                            <div class="bd-hero__banner hero__overlay include__bg" data-background="assets/img/new/bg1.jpg">
                            </div>
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xl-12">
                                        <div class="bd-hero__content z-index-11 p-relative">
                                            <span class="animated fadeInUp">Welcome to NaattuLife</span>
                                            <h2 class="animated fadeInUp">NAATTUMAADU</h2>
                                            <p class="animated fadeInUp">Dairy producers worldwide face similar
                                                challenges around animal welfare, farm<br>
                                                profitability, food safety and work efficiency.</p>
                                            <div class="bd-hero__btn-wrapper animated fadeInDown">
                                                <a class="bd-hero__btn-1" href="#productSection"
                                                    onclick="scrollToSection('productSection')">Our Products</a>
                                                <a class="bd-hero__btn-2" href="{{ route('about') }}">about us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bd-singel__hero">
                        <div class="hero__height d-flex align-items-center p-relative">
                            <div class="bd-hero__banner hero__overlay include__bg" data-background="assets/img/new/bg1.jpg">
                            </div>
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xl-12">
                                        <div class="bd-hero__content z-index-11 p-relative">
                                            <span data-animation="fadeInUp" data-delay=".3s">Get everytime fresh
                                                assets</span>
                                            <h2 data-animation="fadeInUp" data-delay=".5s">fresh Ghee</h2>
                                            <p data-animation="fadeInUp" data-delay=".7s">Dairy producers worldwide
                                                face similar challenges around animal welfare, farm<br>
                                                profitability, food safety and work efficiency.</p>
                                            <div class="bd-hero__btn-wrapper" data-animation="fadeInUp" data-delay=".9s">
                                                <a class="bd-hero__btn-1" href="#productSection"
                                                    onclick="scrollToSection('productSection')">Our Products</a>
                                                <a class="bd-hero__btn-2" href="{{ route('about') }}">about us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bd-singel__hero">
                        <div class="hero__height d-flex align-items-center p-relative">
                            <div class="bd-hero__banner hero__overlay include__bg" data-background="assets/img/new/bg1.jpg">
                            </div>
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xl-12">
                                        <div class="bd-hero__content z-index-11 p-relative">
                                            <span data-animation="fadeInUp" data-delay=".3s">Welcome to NaattuLife</span>
                                            <h2 data-animation="fadeInUp" data-delay=".5s">Milk process</h2>
                                            <p data-animation="fadeInUp" data-delay=".7s">Dairy producers worldwide
                                                face similar challenges around animal welfare, farm<br>
                                                profitability, food safety and work efficiency.</p>
                                            <div class="bd-hero__btn-wrapper" data-animation="fadeInUp" data-delay=".9s">
                                                <a class="bd-hero__btn-1" href="#productSection"
                                                    onclick="scrollToSection('productSection')">Our Products</a>
                                                <a class="bd-hero__btn-2" href="{{ route('about') }}">about us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero area start -->



    <!-- About area start -->
    <section class="bd-about__area pt-120 pb-120" data-background="assets/img/bg/section-bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="bd-about__image-wrapper p-relative mb-60">
                        <img class="bd-about__image-1" src="assets/img/new/ghee.png" width="600" alt="about-img">
                        <div class="bd-about__image-2 text-sm-end">
                            <img src="assets/img/new/nattu.png" width="500" alt="about-img">
                        </div>
                        <div class="bd-about__shape">
                            <img src="assets/img/about/about-cow.png" alt="about-cow-icon">
                            <img class="bd-about__dashed-icon" src="assets/img/about/about-dashed.png" alt="about-dashed">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bd-about__content-wrapper mb-60">
                        <div class="bd-section__title-wrapper mb-40">
                            <span class="bd-sub__title">About Us</span>
                            <h2 class="bd-section__title mb-30">NaattuLife</h2>
                            <p class="bd-section__paragraph">In the heart of linguistic antiquity, within the enchanting
                                folds of the world's ancient tongue, Tamil, a profound concept emerges - "Naattu." An
                                expression that transcends mere words, "Naattu" encapsulates the essence of native,
                                indigenous, and the undying spirit of tradition. It is a linguistic sanctuary where the
                                echoes of time-honored wisdom resonate, and where the primal "aadhi" or originality is
                                celebrated with unwavering reverence. <br><br>

                                "NaattuLife," a name that resonates with this sacred resonance, becomes the vessel through
                                which the timeless heritage of "Naattu" is breathed anew into the contemporary world. It
                                stands as a beacon of unwavering commitment to the preservation of nature's original
                                blueprint, where no genetic changes have marred the sanctity of creation. In this sanctuary,
                                "NaattuLife" takes root, and from its nurturing embrace, emerges a plenty of products
                                designed with a singular purpose - to illuminate the path to a healthier life. <br><br>

                                With a dedication to the unadulterated and the authentic, it offers the bounty of
                                time-tested treasures, infused with the wisdom of generations. It is here, in "NaattuLife,"
                                that the age-old promise of wellness and vitality finds a modern expression, beckoning all
                                to embrace the heritage of their roots, and to partake in a life of abundant health.
                            </p>
                        </div>
                        <div class="bd-about__features-wrapper mb-25">
                            <div class="bd-about__features">
                                <div class="bd-about__features-title">
                                    <h4>Our Mission</h4>
                                </div>
                                <div class="bd-about__features-list">
                                    <ul>
                                        <li>
                                            <div class="features__icon">
                                                <i class="fa-regular fa-check"></i>
                                            </div>
                                            <div class="features__list-title">
                                                High-quality work
                                            </div>
                                        </li>
                                        <li>
                                            <div class="features__icon">
                                                <i class="fa-regular fa-check"></i>
                                            </div>
                                            <div class="features__list-title">
                                                Straightforward pricing
                                            </div>
                                        </li>
                                        <li>
                                            <div class="features__icon">
                                                <i class="fa-regular fa-check"></i>
                                            </div>
                                            <div class="features__list-title">
                                                Rapid response times
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bd-about__experience text-center">
                                <span class="number counter">80</span><span class="plus">+</span>
                                <p>Years experience</p>
                            </div>
                        </div>
                        <a class="bd-theme__btn-1" href="{{ route('about') }}">get in touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About area end -->


    <!-- Features area start -->


    <section class="bd-features__area" data-background="assets/img/bg/section-bg.jpg">

        <div class="bd-features__wrapper">

            <div class="container">
                <div class="bd-features__item-wrapper pt-80 pb-10">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="bd-features__item text-center mb-60">
                                <div class="bd-features__icon">
                                    <img src="assets/img/features/features-icon-01.png" alt="features-icon">
                                </div>
                                <div class="bd-features__content">
                                    <h3><a href="about.html">Superior products</a></h3>
                                    <p>A content farm is a company that employs large numbers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="bd-features__item text-center mb-60">
                                <div class="bd-features__icon">
                                    <img src="assets/img/features/features-icon-02.png" alt="features-icon">
                                </div>
                                <div class="bd-features__content">
                                    <h3><a href="about.html">fully pure & fresh</a></h3>
                                    <p>A content farm is a company that employs large numbers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="bd-features__item text-center mb-60">
                                <div class="bd-features__icon">
                                    <img src="assets/img/features/features-icon-03.png" alt="features-icon">
                                </div>
                                <div class="bd-features__content">
                                    <h3><a href="about.html">best quality providor</a></h3>
                                    <p>A content farm is a company that employs large numbers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="bd-about__area pt-120 pb-120" data-background="assets/img/bg/section-bg.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="bd-about__image-wrapper p-relative mb-60">
                            <div>
                                @php $featuredProduct = $feature->first(); @endphp

                                <img width="300" src="{{ asset('public/storage/images/' . $featuredProduct->image) }}"
                                    alt="product-img">
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bd-about__content-wrapper mb-60">
                            <div class="bd-section__title-wrapper mb-40">
                                <span class="bd-sub__title">Feature Product</span>
                                @if ($feature->count() > 0)
                                    @php $featuredProduct = $feature->first(); @endphp

                                    <h2 class="bd-section__title mb-30">{{ $featuredProduct->name }}</h2>
                                    <p class="bd-section__paragraph">{{ $featuredProduct->description }}</p>
                                    {{-- <div
                                        style="text-align: left; position: absolute; left: 300px; top: 40px; width: calc(100% - 300px);">
                                        <h2 class="text-white" style="font-size: 30px;">{{ $featuredProduct->name }}</h2>
                                        <hr class="text-white" style="width: 50%;">
                                        <h2 class="text-white">&#x20B9;{{ $featuredProduct->price }}</h2>
                                        <p class="text-white" style="width:50%">{{ $featuredProduct->description }}</p>
    
                                        <div style="margin-top: 30px;">
                                            <p class="text-white">CATEGORY: {{ $featuredProduct->category->name }}</p>
                                            <p class="text-white">Brand: {{ $featuredProduct->brand->name }}</p>
                                        </div>
                                    </div> --}}
                                @else
                                    <!-- Display a message or default content when no featured product is available -->
                                    <p>No featured product available.</p>
                                @endif

                            </div>

                            <a class="bd-theme__btn-1"
                                style="padding: 11px; width: 160px; cursor: pointer; pointer-events: auto;"
                                data-toggle="tooltip" data-placement="top" title="Quick Shop"
                                onclick="setProductData({{ $featuredProduct->toJson() }})" data-bs-toggle="modal"
                                data-bs-target="#productmodal">BUY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </section>
    <!-- Features area start -->





    <!-- Product cta area start -->
    <section class="bd-product__cta-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bd-product__cta-item mb-30" style="background:#451c00;">
                        <div class="bd-product__cta-inner">
                            <div class="bd-product__cta-icon">
                                <img src="assets/img/product/product-icon-01.png" alt="product-icon">
                            </div>
                            <div class="bd-product__cta-title">
                                <h3>WE SALE BEST AGRICULTURE <br>
                                    PRODUCTS</h3>
                            </div>
                        </div>
                        <a class="bd-product__cta-btn" href="product-details.html"><i
                                class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bd-product__cta-item mb-30" style="background:#451c00;">
                        <div class="bd-product__cta-inner">
                            <div class="bd-product__cta-icon">
                                <img src="assets/img/product/product-icon-02.png" alt="product-icon">
                            </div>
                            <div class="bd-product__cta-title">
                                <h3>worldwide fresh mild <br>
                                    delivery</h3>
                            </div>
                        </div>
                        <a class="bd-product__cta-btn" href="product-details.html"><i
                                class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product cta area end -->



    <!-- Product area start -->
    <section class="bd-product__area pt-120 pb-90" id="productSection">
        <div class="container">
            <div class="row">
                <div class="bd-section__title-wrapper text-center mb-50">
                    <span class="bd-sub__title">Featured</span>
                    <h2 class="bd-section__title">featured product</h2>
                </div>
            </div>

            <div class="row">
                @foreach ($products as $product)
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bd-product__item text-center ">
                            <div class="bd-product__img">
                                <img height="260" src="{{ asset('public/storage/images/' . $product->image) }}"
                                    alt="product-img">
                            </div>
                            <div class="bd-product__content flex-fill d-flex flex-column ">
                                <h4><a
                                        href="{{ url()->to('product', ['productId' => $product->id]) }}">{{ $product->name }}</a>
                                </h4>
                                <span class="bd-product__new-price">₹{{ $product->price }}</span>
                            </div>
                            <div class="bd-product__action">
                                {{-- <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip" data-placement="top"
                                    title="Quick View" data-bs-toggle="modal"><i class="fal fa-cart-arrow-down"></i></a> --}}

                                <a href="#" data-toggle="tooltip" data-placement="top" title="Quick Shop"
                                    onclick="setProductData({{ $product->toJson() }})" data-bs-toggle="modal"
                                    data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                {{-- <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                    data-placement="top" title="Quick Wishlist" data-bs-toggle="modal"> <i
                                        class="fal fa-heart"></i></a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>



            {{-- <div class="row">
                <div class="bd-product__btn mt-20 mb-30 d-flex justify-content-center">
                    <a class="bd-theme__btn-4" href="shop.html">more proudcts</a>
                </div>
            </div> --}}
        </div>
    </section>

    <!-- Video area start -->
    <Section class="bd-video__area pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="bd-video__wrapper text-center">
                        <div class="bd-video__btn d-flex justify-content-center mb-50">
                            <a class="bd-play__btn  popup-video" href="https://www.youtube.com/watch?v=pc_CgajMMxE"><i
                                    class="fa-solid fa-play"></i></a>
                        </div>
                        <div class="bd-section__title-wrapper mb-45">
                            <span class="bd-sub__title">Intro Video</span>
                            <h2 class="bd-section__title">ready to experience & <br>
                                work difference</h2>
                        </div>
                        <div class="bd-video__btn-wrapper">
                            <a class="bd-theme__btn-1" href="{{ route('contact') }}">get a quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Section>
    <!-- Video area end -->



    <!-- Cta area start -->
    {{-- <section class="bd-cta__area p-relative z-index-11 pt-120 pb-60" data-background="assets/img/bg/cta-bg.jpg">
        <div class="bd-cta__shape">
            <img src="assets/img/cta/shap-01.png" alt="cta-shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="bd-section__title-wrapper mb-50">
                        <span class="bd-sub__title">Custom Request</span>
                        <h2 class="bd-section__title s-2">Book an appointment</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="bd-cta__left-wrapper mb-60">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="bd-cta__input-item mb-30">
                                        <h5 class="bd-cta__input-title">full name</h5>
                                        <div class="bd-cta__input">
                                            <input type="text" placeholder="e.g. jhon william">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bd-cta__input-item mb-30">
                                        <h5 class="bd-cta__input-title">email address</h5>
                                        <div class="bd-cta__input">
                                            <input type="text" placeholder="info@webmail.com">
                                            <i class="fa-solid fa-envelope-open"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bd-cta__input-item mb-30">
                                        <h5 class="bd-cta__input-title">phone number</h5>
                                        <div class="bd-cta__input">
                                            <input type="text" placeholder="999 99 99 999">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bd-cta__input-item mb-30">
                                        <h5 class="bd-cta__input-title">date & time</h5>
                                        <div class="bd-cta__input">
                                            <input type="date">
                                            <i class="fa-solid fa-calendar-days"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="bd-cta__btn mt-10">
                            <a class="bd-theme__btn-2" href="contact.html">get appointment</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bd-contact__support mb-60">
                        <div class="bd-contact__action">
                            <div class="bd-contact__icon">
                                <img src="assets/img/cta/phone-icon.png" alt="phone-icon">
                            </div>
                            <div class="bd-contact__action-text">
                                <span>Or Call Us Now</span>
                                <h3><a href="tel:00211232000">999 99 99 999</a></h3>
                            </div>
                        </div>
                        <p class="bd-cta__paragraph">Give us a call to ask for online advice or book
                            a physical schedule at dairypress soon.</p>
                        <div class="bd-cta__map">
                            <div class="bd-cta__map-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="bd-cta__map-title">
                                <span><a target="_blank"
                                        href="https://www.google.com/maps/place/Dhaka/@23.7805733,90.2792399,11z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.810332!4d90.4125181?hl=en">view
                                        on google map</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}

    @include('web.layouts.modal')
@endsection

@push('scripts')
    <script>
        function scrollToSection(sectionId) {
            var section = document.getElementById(sectionId);

            if (section) {
                section.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
        var quantity;
        var sizeValue = undefined;

        function setProductData(product) {
            $.ajax({
                type: 'GET',
                url: '/model/' + product.id,
                data: {
                    "_token": "{{ csrf_token() }}", // Include CSRF token
                },
                success: function(response) {
                    console.log(response);
                    updateModalContent(response.productDetails, response.sizePriceArray);
                },
                error: function(xhr, status, error) {
                    console.error('Error in AJAX call:', status, error);
                    console.log(xhr);
                }
            });
        }


        function updateModalContent(productDetails, sizePriceArray) {

            console.log(productDetails.size)
            const sizeAndPrices = productDetails.size.split(', ');

            const prices = sizeAndPrices.map(pair => {
                const [size, price] = pair.split(':');
                return parseInt(price);
            });

            const minPrice = Math.min(...prices);

            console.log(minPrice);
            sizeValue = minPrice;

            function handleAddToCartClick(e) {
                e.preventDefault();
                console.log("cart added");
                addToCart(productDetails.id, sizeValue, quantity, productDetails.price);
            }

            // var productModal = new bootstrap.Modal(document.getElementById('productmodal'));

            document.getElementById('productModalTitle').innerText = productDetails.name;
            document.getElementById('productModalPrice').innerText = '₹' + productDetails.price;
            document.getElementById('productModalImage').src = '{{ asset('public/storage/images/') }}' + '/' +
                productDetails.image;

            var addToCartButton = document.getElementById('addToCartBtn');
            if (addToCartButton) {
                addToCartButton.addEventListener('click', handleAddToCartClick)
            }

            var sizesList = document.getElementById('sizesList');
            var sizeContainer = document.getElementById('sizeContainer');

            sizesList.innerHTML = '';

            for (var size in sizePriceArray) {
                var listItem = document.createElement('li');
                listItem.className = 'list-group-item d-flex justify-content-between align-items-center mb-3 m-2';
                listItem.innerHTML = size +
                    '<button class="badge bg-primary cursor-pointer" ' +
                    'style="padding: 10px 14px; font-size: 14px; margin-left: 20px"' +
                    'onclick="updateTotalPrice(' + sizePriceArray[size] + ', ' + quantity + ')">' +
                    '₹' + sizePriceArray[size] + '</button>';

                sizesList.appendChild(listItem);
            }


            // $(".cart-plus").unbind().click(function(e) {
            //     e.preventDefault();
            //     var $input = $(this).parent().find("input");
            //     $input.val(parseInt($input.val()) + 1);
            //     $input.change();
            //     updateTotalPrice(productDetails.price, $input.val());
            //     return false;
            // });

            // $(".cart-minus").unbind().click(function(e) {
            //     e.preventDefault();
            //     var $input = $(this).parent().find("input");
            //     if (parseInt($input.val()) > 1) {
            //         $input.val(parseInt($input.val()) - 1);
            //         $input.change();
            //         updateTotalPrice(productDetails.price, $input.val());
            //     }
            //     return false;
            // });

            $(".cart-input").unbind().change(function(e) {
                e.preventDefault();
                quantity = parseFloat($(this).val());
                updateTotalPrice(sizeValue, quantity);
            });

            $('#productmodal').on('hide.bs.modal', function() {
                $("#quantityInput").val(1);
                if (addToCartButton) {
                    addToCartButton.removeEventListener('click', handleAddToCartClick);
                }
            });
        }

        function updateTotalPrice(basePrice, selectedSize) {
            console.log('val', sizeValue)
            sizeValue = basePrice;
            console.log('price', basePrice)
            var totalPrice = quantity ? basePrice * quantity : basePrice;

            // if (!isNaN(totalPrice) && quantity > 1) {
            //     totalPrice = totalPrice * quantity;
            // }
            console.log('total', totalPrice)
            $("#productModalPrice").text('₹' + totalPrice.toFixed(2));
        }
    </script>
@endpush
