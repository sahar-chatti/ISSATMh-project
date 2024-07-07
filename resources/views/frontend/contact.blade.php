@extends('frontend.general_structure')

@section('content')
<div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Bienvenue sur Issat</h6>
            <h2>Merci d'avoir choisi l'Issat!</h2>
            <p>Nous vous offrons les meilleures formations et services sur la plateforme Issat, et cela à un prix raisonnable. Vous pouvez bénéficier de nos offres exceptionnelles tout en soutenant notre plateforme en la partageant avec vos amis.</p>
            <div class="special-offer">
              <span class="offer">moins<br><em>50%</em></span>
              <h6>Valide: <em>24 Octobre 2024</em></h6>
              <h4>Offre spéciale <em>50%</em> MOINS!</h4>
              <a href="#"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Votre Nom..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Votre E-mail..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" id="message" placeholder="Votre Message"></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Envoyer Message </button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
