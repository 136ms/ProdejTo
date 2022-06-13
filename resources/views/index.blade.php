@extends('layouts.master')
@section('title', 'Home')

@section('content')
    <div class="container p-5">
        <h1 class="text-white text-center mx-auto">Prodej.to</h1>
    </div>

    <div class="container p-4">
        <form class="d-flex mx-auto w-50" method="post" action="{{ route('advert.search') }}">>
            @csrf
            <input name="search" class="form-control me-2" type="search" placeholder="Vyhledat" aria-label="Search">
            <button  value="{{$id}}" name="id" class="btn btn-primary" type="submit">Vyhledat</button>
        </form>
    </div>

    <div class="container">
        <h2 class="text-white text-center mx-auto p-4">Kategorie</h2>
    </div>
    <section>
        <div class="container text-center mx-auto">
            <a href="/items" target="_blank" class="link">
                <button class="btn btn-lg btn-outline-primary m-1">Elektronika</button>
            </a>
            <a href="/items" target="_blank" class="link">
                <button class="btn btn-lg btn-outline-primary m-1">Oblečení</button>
            </a>
            <a href="/items" target="_blank" class="link">
                <button class="btn btn-lg btn-outline-primary m-1">Auta</button>
            </a>
            <a href="/items" target="_blank" class="link">
                <button class="btn btn-lg btn-outline-primary m-1">Zvířata</button>
            </a>
            <a href="/items" target="_blank" class="link">
                <button class="btn btn-lg btn-outline-primary m-1">Domácnost</button>
            </a>
            <a href="/items" target="_blank" class="link">
                <button class="btn btn-lg btn-outline-primary m-1">Reality</button>
            </a>
        </div>
    </section>
    <section>
        <div class="container">
            <h2 class="text-white text-center mx-auto p-4">Inzeráty</h2>
        </div>

        <div class="container">
            <div class="card-deck">
                <div class="row mx-auto">
                    <?php $i = 0; ?>
                @foreach($advertsData as $data)
                    <div class="col">
                        <a href="/item" target="_blank" class="link">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-text text-white text-center">{{$data['itemName']}}</h4>
                                </div>
                                <img class="card-img-top" src="{{URL('images/bag.png')}}" alt="Card image cap">
                                <div class="card-footer text-center bg-primary">
                                    <h4 class="card-text text-white text-center"><b>{{$data['price']}} Kč</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php $i++; ?>
                    @if($i == 5)
                        <div class="w-100" style="margin-top: 20px"></div>
                        <?php $i = 0; ?>
                    @endif
                @endforeach
                </div>
            </div>
        </div>
    </section>
    <div class="d-flex justify-content-center" style="margin:15px">
        <a href="/page/{{$id}}" class="btn btn-primary" >Další strana</a>
    </div>

@endsection

