@extends('layouts.app')

@section('title')
    Store Category Page
@endsection

@section('content')
    <div class="page-content page-home">
        <section class="store-trend-categories">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>All Categories</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <a href="#" class="component-categories d-block">
                            <div class="categories-image">
                                <img src="images/categories-gadget.svg" alt="" class="w-100" />
                            </div>
                            <p class="categories-text">Gadgets</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="component-categories d-block">
                            <div class="categories-image">
                                <img src="images/categories-furniture.svg" alt="" class="w-100" />
                            </div>
                            <p class="categories-text">Furnitures</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
                        <a href="#" class="component-categories d-block">
                            <div class="categories-image">
                                <img src="images/categories-makeup.svg" alt="" class="w-100" />
                            </div>
                            <p class="categories-text">Make Up</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
                        <a href="#" class="component-categories d-block">
                            <div class="categories-image">
                                <img src="images/categories-sneaker.svg" alt="" class="w-100" />
                            </div>
                            <p class="categories-text">Sneakers</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
                        <a href="#" class="component-categories d-block">
                            <div class="categories-image">
                                <img src="images/categories-tools.svg" alt="" class="w-100" />
                            </div>
                            <p class="categories-text">Tools</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
                        <a href="#" class="component-categories d-block">
                            <div class="categories-image">
                                <img src="images/categories-baby.svg" alt="" class="w-100" />
                            </div>
                            <p class="categories-text">Baby</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>All Products</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/product-apple-watch-4.jpg');"></div>
                            </div>
                            <div class="products-text">
                                Apple Watch 4
                            </div>
                            <div class="products-price">
                                $890
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <a href="" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/product-orange-bogotta.jpg');"></div>
                            </div>
                            <div class="products-text">
                                Orange Bogotta
                            </div>
                            <div class="products-price">
                                $94,509
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <a href="" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/product-sofa-ternyaman.jpg');"></div>
                            </div>
                            <div class="products-text">
                                Sofa Ternyaman
                            </div>
                            <div class="products-price">
                                $1,409
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <a href="" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/product-bubuk-maketti.jpg');"></div>
                            </div>
                            <div class="products-text">
                                Bubuk Maketti
                            </div>
                            <div class="products-price">
                                $225
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                        <a href="" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/product-tatakan-gelas.jpg');"></div>
                            </div>
                            <div class="products-text">
                                Tatakan Gelas
                            </div>
                            <div class="products-price">
                                $45,185
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                        <a href="" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/product-mavic-kawe.jpg');"></div>
                            </div>
                            <div class="products-text">
                                Mavic Kawe
                            </div>
                            <div class="products-price">
                                $503
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
                        <a href="" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/product-black-edition-nike.jpg');">
                                </div>
                            </div>
                            <div class="products-text">
                                Black Edition Nike
                            </div>
                            <div class="products-price">
                                $70,483
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
                        <a href="" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/product-monkey-toys.jpg');"></div>
                            </div>
                            <div class="products-text">
                                Monkey Toys
                            </div>
                            <div class="products-price">
                                $789
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
