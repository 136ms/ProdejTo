@extends('layouts.master')
@section('title', 'Items')

@section('content')
    <section>
        <div class="container p-4">
            <form class="d-flex mx-auto w-50">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>
        <div class="container mx-auto">
            <div class="card-deck">
                <div class="row mx-auto">
                    <div class="col">
                        <a href="/item" target="_blank" class="link">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-text text-white text-center">Gucci Bag</h4>
                                </div>
                                <img class="card-img-top" src="images/bag.png" alt="Card image cap">
                                <div class="card-footer text-center bg-primary">
                                    <h4 class="card-text text-white text-center"><b>10800 Kč</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/item" target="_blank" class="link">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-text text-white text-center">Gucci Bag</h4>
                                </div>
                                <img class="card-img-top" src="images/bag.png" alt="Card image cap">
                                <div class="card-footer text-center bg-primary">
                                    <h4 class="card-text text-white text-center"><b>10800 Kč</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/item" target="_blank" class="link">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-text text-white text-center">Gucci Bag</h4>
                                </div>
                                <img class="card-img-top" src="images/bag.png" alt="Card image cap">
                                <div class="card-footer text-center bg-primary">
                                    <h4 class="card-text text-white text-center"><b>10800 Kč</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-deck">
                <div class="row mx-auto">
                    <div class="col">
                        <a href="/item" target="_blank" class="link">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-text text-white text-center">Gucci Bag</h4>
                                </div>
                                <img class="card-img-top" src="images/bag.png" alt="Card image cap">
                                <div class="card-footer text-center bg-primary">
                                    <h4 class="card-text text-white text-center"><b>10800 Kč</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/item" target="_blank" class="link">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-text text-white text-center">Gucci Bag</h4>
                                </div>
                                <img class="card-img-top" src="images/bag.png" alt="Card image cap">
                                <div class="card-footer text-center bg-primary">
                                    <h4 class="card-text text-white text-center"><b>10800 Kč</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/item" target="_blank" class="link">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-text text-white text-center">Gucci Bag</h4>
                                </div>
                                <img class="card-img-top" src="images/bag.png" alt="Card image cap">
                                <div class="card-footer text-center bg-primary">
                                    <h4 class="card-text text-white text-center"><b>10800 Kč</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-deck">
                <div class="row mx-auto">
                    <div class="col">
                        <a href="/item" target="_blank" class="link">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-text text-white text-center">Gucci Bag</h4>
                                </div>
                                <img class="card-img-top" src="images/bag.png" alt="Card image cap">
                                <div class="card-footer text-center bg-primary">
                                    <h4 class="card-text text-white text-center"><b>10800 Kč</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/item" target="_blank" class="link">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-text text-white text-center">Gucci Bag</h4>
                                </div>
                                <img class="card-img-top" src="images/bag.png" alt="Card image cap">
                                <div class="card-footer text-center bg-primary">
                                    <h4 class="card-text text-white text-center"><b>10800 Kč</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/item" target="_blank" class="link">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-text text-white text-center">Gucci Bag</h4>
                                </div>
                                <img class="card-img-top" src="images/bag.png" alt="Card image cap">
                                <div class="card-footer text-center bg-primary">
                                    <h4 class="card-text text-white text-center"><b>10800 Kč</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center bg-dark">
            <li class="page-item disabled bg-dark">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
@endsection
