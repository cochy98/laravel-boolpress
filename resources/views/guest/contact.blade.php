@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center py-5">Contattaci</h1>
    <div class="wrapper-form">
        <form action="{{ route("guest.storeContact") }}" method="post">
            @csrf
            @method('POST')

            <div class="mb-3">
                <label for="guestName">Nome</label>
                <input class="form-control" type="text" name="guestName" id="guestName">
            </div>

            <div class="mb-3">
                <label for="guestEmail">Email</label>
                <input class="form-control" type="email" name="guestEmail" id="guestEmail">
            </div>

            <div class="mb-3">
                <label for="guestMessage">Corpo</label>
                <textarea class="form-control" id="guestMessage" type="text" value="" name="guestMessage" rows="7"></textarea>
            </div>

            <button class="btn btn-primary" type="submit">Invia</button>
        </form>
    </div>
</div>
@endsection
