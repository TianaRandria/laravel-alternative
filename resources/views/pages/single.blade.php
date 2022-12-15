@extends('layouts.app')

@section('content')
<section class="banner-search-alternative">
        <div class="search-alternative-container">
            <div class="section-header">
                <div class="search-alternative-container-column">
                    <h2 class=" search-alternative-title">
                        Comment trouver une bonne alternative?</h2>
                    <p class="date">12 octobre 2020</p>

                </div>
            </div>
    </section>
    <section class="search-blog">
        <div class="alternative-blog-row">
            <p class="blog">Blog ></p>
            <a href="#">
                <p class="article-blog">Comment trouver une bonne alternative ?</p>
            </a>
        </div>
        <div class="blog-article-alternative">
            <h2 class="title-article-1"><a class="title-article-1"href="#">Titre 2</a></h2>
            <h2 class="title-article-2"><a class="title-article-2"href="#">Titre 3</a></h2>
            <h2 class="title-article-3"><a class="title-article-3"href="#">Titre 4</a></h2> 
            <p class="texte-blog">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                Ut enim ad minim veniam.<br>
            </p>
            
        </div>
        
        <div>
            <div class="article-btn">
                <div class="categories-btn">
                    <a class="btn voir-plus" href="#" role="button">Voir Plus</a>
                    <a class="btn btn-alternative" href="#" role="button">Découvrir</a>
                    
                </div>
              </div>
            </div>
        </div>
    </section>

@endsection