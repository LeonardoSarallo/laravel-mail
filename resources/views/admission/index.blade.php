@extends('layouts.app')
@section('content')
  <div class="container section-1">
    <div class="row">
      <div class="col-12">
        <h1>Sei ad un passo dalla tua nuova professione</h1>
        <p>Per assicurare la buona riuscita del corso, ogni candidato deve sostenere
          un breve percorso di selezione. Le due caratteristiche fondamentali per
          essere un perfetto studente Boolean sono la capacità di ragionamento
          critico e la motivazione</p>
      </div>
    </div>
  </div>
  <div class="section-2">
    <div class="container">
      <h2>Richiedi info</h2>
      <form action="{{ route('admission.save') }}" method="post">
        @csrf
        @method('POST')
        <div class="">
          <label for="name">Nome</label>
          <input type="text" name="name" value="" placeholder="inserisci il tuo nome">

        </div>
        <div class="">
          <label for="email">Email</label>
          <input type="text" name="name" value="" placeholder="inserisci la tua email">

        </div>
        <div class="">
          <label for="message">Messaggio</label>
          <textarea name="name" value="" placeholder="inserisci il tuo messaggio"></textarea>

        </div>
        <div class="">
          <button type="submit" name="button">Invia</button>
        </div>
      </form>
    </div>
  </div>
@endsection
