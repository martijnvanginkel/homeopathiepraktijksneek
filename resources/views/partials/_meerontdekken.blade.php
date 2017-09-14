
<div class="row">
  <div class="col-md-12">
    <div class="meerontdekkenWrapper">
    @foreach($footers as $footer)
      <h1 class="mainHeader">{{ $footer->footerTitle }}</h1>
      <p class="meerontdekkenText">
        {{ $footer->footerText }}
      </p>
    @endforeach
      <div class="buttonWrapper">
        <a href="/behandelingen"><div class="mainButton" id="behandelingenButton">Behandelingen</div></a>
        <a href="/contact"><div class="mainButton" id="contactButton">Contact</div></a>
      </div>
    </div>

  </div>
</div>

