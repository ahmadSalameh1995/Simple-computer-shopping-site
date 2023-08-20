@extends('Layout');
@yield('title', 'show computers')
@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8">
            <h1>Computers</h1>
        </div>

        <div class="mt-8 ">
            <p>{{ $computer['name'] }} is from {{ $computer['origan'] }} <strong>{{ $computer['price'] }}$</strong> </p>
        </div><br>
        <center><a href="{{ route('computers.edit', $computer->id) }}">edit</a></center><br>


        <form action="{{ route('computers.destroy', $computer->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>


    </div>
@endsection
