<div class="navbar">
  <ul>
  @foreach ($navbar as $tasto)
    <li>
      @switch($tasto)
        @case('Chi siamo')
          <a href="https://www.footballcartoon.it/chi-siamo/">{{$tasto}}</a>
          @break
        @case('Contatti')
          <a href="https://www.footballcartoon.it/contatti/">{{$tasto}}</a>
          @break
        @case('Catalogo')
          <a href="https://www.footballcartoon.it/negozio/">{{$tasto}}</a>
          @break
      @endswitch
    </li>

  @endforeach
  </ul>
</div>
