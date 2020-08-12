@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="mt-3 mb-3">
        Сообщения
    </h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">email</th>
            <th scope="col">Имя</th>
            <th scope="col">Тема</th>
            <th scope="col">Сообщение</th>
            <th scope="col">Отправлено</th>
            {{-- <th scope="col">Handle</th> --}}
        </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->subject}}</td>
                    <td>{{$contact->message}}</td>
                    <td>{{$contact->created_at}}</td>
                </tr>
            @endforeach
    @endsection
</div>