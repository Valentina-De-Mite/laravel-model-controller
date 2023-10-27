@extends ("layouts.app")

@section('content')

<div class="body">

<div class="container  py-5 ">
    @foreach($movies as $movie)
    


    <div class="col-6 w-50  m-auto mb-4 series">
        <div class="card rounded black text-white p-5">
            <img class="poster" src="{{Vite::asset($movie['Image'])}}" />
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