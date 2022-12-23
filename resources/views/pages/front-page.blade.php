@extends('layouts.app')

@section('content')
<section class="banner-index">
    <div class=" first-banner-container">
      <div class="banner-container-title">
        <h1 class=" banner-title">Trouver une alternative<br> à<span class="photoshop"> Photoshop|</span></h1>
        <p class="banner-texte">Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit,
          sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua.<br>
          Ut enim ad minim veniam.
        </p>
        <a class="boutton boutton-alternative" href="{{ route('produit') }}">Découvrir</a>


      </div>

      <div class="second-banner-container">
        <img src="{{ asset('images/img-home.svg') }}" class="image-banner" alt="Image page d'acceuil">
      </div>
    </div>
  </section>



  <!--Nos catégories mises en avant--->
  <section class="container-categorie">

    <div id="nos-categories">
      <div class="categorie-article-1 ">
        <div class="categorie-column">
          <h2 class="categorie-title">Nos catégories mises en avant</h2>
          <p class="categorie-texte">Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
            Ut enim ad minim veniam.<br>
          </p>
        </div>
        <div class="categorie-btn">
          <a class="boutton" href="#">Voir Plus</a>
        </div>
      </div>



      <!-- end banner content -->

      <!-- categories listing-->
      <div class="categories-list">

        <!-- item -->
        <a href="{{ route('produit') }}" class="categories-list-item">

          <div class="categories-list-item-header">
            <div class="categories-list-item-icon">
              <img src="{{ asset('images/crayon.svg') }}"alt="Graphisme" width="29" height="29">
            </div>

            <h3 class="categories-list-item-title">Graphisme</h3>
          </div>

          <div class="categories-list-item-content">
            <p class="categories-list-item-excerpt">Lorem ipsum dolor sit amet,<br>
              consectetur adipiscing elit, sed<br>
              do eiusmod tempor incididunt ut labore et dolore magna<br>
              aliqua.</p>
          </div>

          <div class="categories-list-item-footer">
            <span><img src="{{ asset('images/fleche.svg') }}" class="icon-fleche" alt="Voir la suite"></span>
          </div>

        </a>
        <!-- end item -->

        <!-- item -->
        <a href="{{ route('produit') }}" class="categories-list-item">

          <div class="categories-list-item-header">
            <div class="categories-list-item-icon">
              <img src="{{ asset('images/crayon.svg') }}" alt="Graphisme" width="29" height="29">
            </div>

            <h3 class="categories-list-item-title">Graphisme</h3>
          </div>

          <div class="categories-list-item-content">
            <p class="categories-list-item-excerpt">Lorem ipsum dolor sit amet,<br>
              consectetur adipiscing elit, sed<br>
              do eiusmod tempor incididunt ut labore et dolore magna<br>
              aliqua.</p>
          </div>

          <div class="categories-list-item-footer">
            <span><img src="{{ asset('images/fleche.svg') }}" class="icon-fleche" alt="Voir la suite"></span>
          </div>

        </a>
        <!-- end item -->

        <!-- item -->
        <a href="{{ route('produit') }}" class="categories-list-item">

          <div class="categories-list-item-header">
            <div class="categories-list-item-icon">
              <img src="{{ asset('images/crayon.svg') }}" alt="Graphisme" width="29" height="29">
            </div>

            <h3 class="categories-list-item-title">Graphisme</h3>
          </div>

          <div class="categories-list-item-content">
            <p class="categories-list-item-excerpt">Lorem ipsum dolor sit amet,<br>
              consectetur adipiscing elit, sed<br>
              do eiusmod tempor incididunt ut labore et dolore magna<br>
              aliqua.</p>
          </div>

          <div class="categories-list-item-footer">
            <span><img src="{{ asset('images/fleche.svg') }}" class="icon-fleche" alt="Voir la suite"></span>
          </div>

        </a>
        <!-- end item -->

        <!-- item -->
        <a href="{{ route('produit') }}" class="categories-list-item">

          <div class="categories-list-item-header">
            <div class="categories-list-item-icon">
              <img src="{{ asset('images/crayon.svg') }}" alt="Graphisme" width="29" height="29">
            </div>

            <h3 class="categories-list-item-title">Graphisme</h3>
          </div>

          <div class="categories-list-item-content">
            <p class="categories-list-item-excerpt">Lorem ipsum dolor sit amet,<br>
              consectetur adipiscing elit, sed<br>
              do eiusmod tempor incididunt ut labore et dolore magna<br>
              aliqua.</p>
          </div>

          <div class="categories-list-item-footer">
            <span><img src="{{ asset('images/fleche.svg') }}" class="icon-fleche" alt="Voir la suite"></span>
          </div>

        </a>
        <!-- end item -->



      </div>
      <!-- end categories listing-->

    </div>

  </section>
  <!------------------------------------Alternatives les plus demandés-------------------------------------------------------->
  <section class="alternatives-demandes">
    <div id="alternatives-demandes">
      <div class="alternatives-article-1 ">
        <div class="alternatives-column">
          <h2 class="alternatives-title">Alternatives les plus demandés</h2>
          <p class="alternatives-texte">Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
            Ut enim ad minim veniam.<br>
          </p>
        </div>
        <div class="alternatives-btn">
          <a class="boutton" href="#">Voir Plus</a>
        </div>
      </div>
      <div class="alternatives-card-row">
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>

            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div><span>
            <div class="first-column-title-1">
              <a href="title-alternatives">
                <h3 class="title-alternatives">Adobe Photoshop</h3>
              </a>
              <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
            </div>
        </div>

      </div>
    </div>
  </section>


  <!-----------------------------Nouvelles alternatives--------------------------------------------->

  <section class="nouvelles-alternatives">
    <div id="alternatives">
      <div class="alternatives-article-2">
        <div class="alternatives-column">
          <h2 class="alternatives-title">Nouvelles alternatives</h2>
          <p class="alternatives-texte">Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
            Ut enim ad minim veniam.<br>
          </p>
        </div>
        <div class="alternatives-btn">
          <a class="btn boutton" href="#" role="button">Voir Plus</a>
        </div>
      </div>

      <div class="alternatives-card-row">
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <span class="title_alternatives">
              <a href="title-alternatives">
                <h3 class="title-alternatives">Adobe Photoshop</h3>
              </a>
              <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <span class="title_alternatives">
              <a href="title-alternatives">
                <h3 class="title-alternatives">Adobe Photoshop</h3>
              </a>
              <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>
        <div class="card first-colmun-box-1">
          <div class="icon-vert">
            <span><img src="{{ asset('images/crayon.svg') }}" alt="icon-crayon" width="21" height="22"></span>
          </div>
          <div class="first-column-title-1">
            <a href="title-alternatives">
              <h3 class="title-alternatives">Adobe Photoshop</h3>
            </a>
            <div class="first-column-subtitle-1">Payant | 84 Alternatives | 3075 Avis</div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
