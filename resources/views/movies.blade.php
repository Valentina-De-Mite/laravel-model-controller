@extends ("layouts.app")

@section('content')

<div class="bg-dark">

<div class="container series py-5 text-center">
    @foreach($movies as $movie)

    <div class="col mb-4">
        <div class="card rounded bg-dark text-light">
            <img class="img-fluid poster" src="{{Vite::asset('resources/img/logo-no-background.png')}}" />
            <div class="card-text text-start pt-5 ps-2">
                <h5>Titolo: "{{$movie['title']}}"; </h5>
                <h5>Titolo originale: "{{$movie['original_title']}}";  </h5>
                <div>
                <h5>Nazionalita': "{{$movie['nationality']}}";</h5>
                <h5> Data di uscita: "{{$movie['date']}}";</h5>
                <h5>Voto: "{{$movie['vote']}}";</h5>
                </div>
                
            </div>
        </div>
    </div>

    @endforeach
</div>
















@endsection