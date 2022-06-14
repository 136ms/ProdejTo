@extends('layouts.master')
@section('title', 'Item')

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Kontakt</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-white">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputName1" class="form-label">Křestní jméno:</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Vaše křestní jméno:"
                                   aria-describedby="nameHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputSurname1" class="form-label">Příjmení: </label>
                            <input type="text" class="form-control" id="exampleInputSurname1" placeholder="Vaše příjmení:"
                                   aria-describedby="surnameHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">E-Mail: </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Váš E-mail:"
                                   aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputMessage1" class="form-label">Zpráva:</label>
                            <textarea type="text" class="form-control" id="exampleInputMessage1" placeholder="Vaše zpráva:"
                                      aria-describedby="messageHelp"></textarea>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zpět</button>
                    <button type="button" class="btn btn-primary">Kontaktovat</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h3>Zobrazit všechny fotografie</h3><hr>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID fotografie</th>
                <th scope="col">Fotografie</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

    <section>
        <div class="container mx-auto w-50">
            <div class="card mb-3 mt-3">
                <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php $firstDone = false; ?>
                        @foreach($imageData as $data)
                            @if($firstDone == false)
                                <?php $firstDone = true ?>
                            <div class="carousel-item card-img-top active">
                                <img src="{{ URL::asset("images/".$data->image)}}" class="d-block w-100" alt="...">
                            </div>
                                @else
                                    <div class="carousel-item card-img-top">
                                        <img src="{{ URL::asset("images/".$data->image)}}" class="d-block w-100" alt="...">
                                    </div>
                                @endif
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Předchozí</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Další</span>
                    </button>
                </div>
                <div class="card-footer text-center bg-primary">
                    <h4 class="card-text text-white"><b>{{$advertData->price}} Kč</b></h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$advertData['itemName']}}</h5>
                    <p class="card-text">{{$advertData['description']}}</p>
                    <p class="card-text text-primary">Poloha: <span class="text-muted">{{$advertData['location']}}</span></p>
                    <p class="card-text text-primary">Kategorie: <span class="text-muted">{{$advertData['categoryID']}}</span></p>
                    <p class="card-text text-primary">Datum: <span class="text-muted">{{substr($advertData['updated_at'],0,10)}}</span></p>
                    <div class="text-center">
                        <button class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Kontaktovat
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
