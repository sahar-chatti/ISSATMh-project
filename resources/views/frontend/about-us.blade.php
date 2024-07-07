@extends('frontend.general_structure')

@section('content')
<div class="section about-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-1">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Par où commencer sur Issat?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Découvrez les fonctionnalités de la plateforme Issat où vous pouvez accéder à une multitude de formations,
                 bénéficier de services de fabrication de cartes électroniques sur mesure 
                 et réserver des laboratoires de chimie de pointe. 
                 Explorez nos offres dès maintenant et lancez-vous vers le succès!
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Comment travaillons-nous ensemble sur Issat?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Découvrez les fonctionnalités collaboratives de la plateforme Issat qui facilitent 
                le travail en équipe et la communication entre les clients et notre administration.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Pourquoi choisir Issat pour votre formation?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Issat offre une multitude de formations de qualité présentielle et en ligne, dispensées par des experts du domaine, pour vous permettre d'atteindre vos objectifs éducatifs et professionnels.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Recevons-nous le meilleur support sur Issat?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                L'équipe de support d'Issat est toujours là pour répondre à vos questions et résoudre vos problèmes, afin de vous garantir la meilleure expérience possible.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 align-self-center">
        <div class="section-heading">
          <h6>À Propos d'Issat</h6>
          <h2>Qu'est-ce qui fait d'Issat la meilleure plateforme pour votre entreprise ?</h2>
          <p>Découvrez ce qui distingue L'Issat des autres plateformes d'institut suppérieure en ligne
             et commencez dès aujourd'hui votre parcours vers le succès éducatif et professionnel.</p>
          <div class="main-button">
            <a href="#">Découvrir Plus</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection