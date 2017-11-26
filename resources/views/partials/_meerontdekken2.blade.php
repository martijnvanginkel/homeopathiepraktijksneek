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
        <a href="/"><div class="mainButton" id="behandelingenButton">Wie ben ik?</div></a>
        <a href="/praktijk"><div class="mainButton" id="contactButton">De praktijk</div></a>
      </div>
    </div>

  </div>
</div>
