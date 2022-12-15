@extends('layouts.app')

@section('content')
<section class="produit-banner">
        <div class="produit-container">
            <div class="produit-header">
                <div class="bloc-title-produit">
                    <div class="crayon">
                        <div class="carre-rose-produit">
                            <img src="{{ asset('images/crayon.svg') }}" class="icon-crayon-header" alt="icon-crayon" width="21"
                                height="22">
                        </div>
                        <div class="box-produit-title">
                            <h2 class=" produit-title">Adobe Photoshop</h2>
                        </div>
                    </div>

                    <p class="produit-texte">Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit,<br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim adminim veniam. </p>

                </div>
 
                <div class="bg-container-column">
                    <img src="{{ asset('images/img-produit.svg') }}" class="image-acceuil" alt="Image page d'acceuil"
                        width="595" height="403">
                </div>
            </div>
        </div>
    </section>
    <section class="produit-alternatives">
        <div id="produit-alternatives">
            <div class="alternatives-produit-section">
                <div class="alternatives-produit-column">
                    <a href="#">
                        <h2 class="alternatives-produit-title">Toutes les alternatives </h2>
                    </a>
                    <p class="alternatives-produit-texte">Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                        Ut enim ad minim veniam.<br>
                    </p>
                </div>
                <div class="alternatives-btn">
                    <a class="voir-plus" href="#">Voir Plus</a>
                </div>
            </div>
        </div>
    </section>
    <section class="alternatives-list">
        <div id="alternatives-column">
            <div class="bloc-column-alternatives">
                <!-- products list -->
                <div class="products">

                    <!-- product -->
                    <div class="product">
                        <div class="product-row">
                            <div class="product-aside">
                                <a href="#" class="product-thumbnail">
                                    <img src="{{ asset('images/crayon.svg') }}" class="icon-crayon" alt="icon-crayon" width="21"
                                        height="22">
                                </a>
                                <div class="product-interractions">
                                    <a href="#" title="J'aime"
                                        class="product-interractions-item product-interractions-item-like">
                                        <img src="{{ asset('images/icon-like.svg') }}" alt="J'aime" width="13" height="13">
                                    </a>
                                    <a href="#" title="J'aime pas"
                                        class="product-interractions-item product-interractions-item-unlike">
                                        <img src="{{ asset('images/unlike.svg') }}" alt="J'aime pas" width="13" height="13">
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">

                                <div class="product-header">

                                    <a href="#">
                                        <h2 class="product-title">Figma</h2>
                                    </a>

                                    <a href="#" class="product-rating">
                                        <div class="product-interractions-item product-interractions-item-like">
                                            <img src="{{ asset('images/icon-like.svg') }}" alt="J'aime" width="13" height="13">
                                        </div>
                                        <span class="product-rating-count product-rating-count-like">2560</span>
                                    </a>
                                </div>

                                <a href="#" class="product-excerpt">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end product -->

                    <!-- product -->
                    <div class="product">
                        <div class="product-row">
                            <div class="product-aside">
                                <a href="#" class="product-thumbnail">
                                    <img src="assets/images/crayon.svg" class="icon-crayon" alt="icon-crayon" width="21"
                                        height="22">
                                </a>
                                <div class="product-interractions">
                                    <a href="#" title="J'aime"
                                        class="product-interractions-item product-interractions-item-like">
                                        <img src="{{ asset('images/icon-like.svg') }}"alt="J'aime" width="13" height="13">
                                    </a>
                                    <a href="#" title="J'aime pas"
                                        class="product-interractions-item product-interractions-item-unlike">
                                        <img src="{{ asset('images/unlike.svg') }}" alt="J'aime pas" width="13" height="13">
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">

                                <div class="product-header">

                                    <a href="#">
                                        <h2 class="product-title">Figma</h2>
                                    </a>

                                    <a href="#" class="product-rating">
                                        <div class="product-interractions-item product-interractions-item-like">
                                            <img src="{{ asset('images/icon-like.svg') }}" alt="J'aime" width="13" height="13">
                                        </div>
                                        <span class="product-rating-count product-rating-count-like">2560</span>
                                    </a>
                                </div>

                                <a href="#" class="product-excerpt">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end product -->

                    <!-- product -->
                    <div class="product">
                        <div class="product-row">
                            <div class="product-aside">
                                <a href="#" class="product-thumbnail">
                                    <img src="assets/images/crayon.svg" class="icon-crayon" alt="icon-crayon" width="21"
                                        height="22">
                                </a>
                                <div class="product-interractions">
                                    <a href="#" title="J'aime"
                                        class="product-interractions-item product-interractions-item-like">
                                        <img src="{{ asset('images/icon-like.svg') }}" alt="J'aime" width="13" height="13">
                                    </a>
                                    <a href="#" title="J'aime pas"
                                        class="product-interractions-item product-interractions-item-unlike">
                                        <img src="{{ asset('images/unlike.svg') }}" alt="J'aime pas" width="13" height="13">
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">

                                <div class="product-header">

                                    <a href="#">
                                        <h2 class="product-title">Figma</h2>
                                    </a>

                                    <a href="#" class="product-rating">
                                        <div class="product-interractions-item product-interractions-item-like">
                                            <img src="{{ asset('images/icon-like.svg') }}" alt="J'aime" width="13" height="13">
                                        </div>
                                        <span class="product-rating-count product-rating-count-like">2560</span>
                                    </a>
                                </div>

                                <a href="#" class="product-excerpt">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end product -->

                    <!-- product -->
                    <div class="product">
                        <div class="product-row">
                            <div class="product-aside">
                                <a href="#" class="product-thumbnail">
                                    <img src="assets/images/crayon.svg" class="icon-crayon" alt="icon-crayon" width="21"
                                        height="22">
                                </a>
                                <div class="product-interractions">
                                    <a href="#" title="J'aime"
                                        class="product-interractions-item product-interractions-item-like">
                                        <img src="{{ asset('images/icon-like.svg') }}" alt="J'aime" width="13" height="13">
                                    </a>
                                    <a href="#" title="J'aime pas"
                                        class="product-interractions-item product-interractions-item-unlike">
                                        <img src="{{ asset('images/unlike.svg') }}" alt="J'aime pas" width="13" height="13">
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">

                                <div class="product-header">

                                    <a href="#">
                                        <h2 class="product-title">Figma</h2>
                                    </a>

                                    <a href="#" class="product-rating">
                                        <div class="product-interractions-item product-interractions-item-like">
                                            <img src="{{ asset('images/icon-like.svg') }}" alt="J'aime" width="13" height="13">
                                        </div>
                                        <span class="product-rating-count product-rating-count-like">2560</span>
                                    </a>
                                </div>

                                <a href="#" class="product-excerpt">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end product -->

                    <!-- product -->
                    <div class="product">
                        <div class="product-row">
                            <div class="product-aside">
                                <a href="#" class="product-thumbnail">
                                    <img src="assets/images/crayon.svg" class="icon-crayon" alt="icon-crayon" width="21"
                                        height="22">
                                </a>
                                <div class="product-interractions">
                                    <a href="#" title="J'aime"
                                        class="product-interractions-item product-interractions-item-like">
                                        <img src="{{ asset('images/icon-like.svg') }}" alt="J'aime" width="13" height="13">
                                    </a>
                                    <a href="#" title="J'aime pas"
                                        class="product-interractions-item product-interractions-item-unlike">
                                        <img src="{{ asset('images/unlike.svg') }}" alt="J'aime pas" width="13" height="13">
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">

                                <div class="product-header">

                                    <a href="#">
                                        <h2 class="product-title">Figma</h2>
                                    </a>

                                    <a href="#" class="product-rating">
                                        <div class="product-interractions-item product-interractions-item-like">
                                            <img src="{{ asset('images/icon-like.svg') }}" alt="J'aime" width="13" height="13">
                                        </div>
                                        <span class="product-rating-count product-rating-count-like">2560</span>
                                    </a>
                                </div>

                                <a href="#" class="product-excerpt">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end product -->


                </div>
                <!-- end products list -->

                <div class="description-alternatives">
                    <a href="#">
                        <h2 class="description">Description Alternative</h2>
                    </a>
                    <p class="description-texte">Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit,<br> 
                        40<br>
                        Ut enim ad minim veniam.
                </div>
            </div>
        </div>
    </section>

@endsection