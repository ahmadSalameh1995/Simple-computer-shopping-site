@extends('Layout')

@section('title','index')

@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8">
            <h1>Computers</h1>
        </div>

        @if(count($computers)>0)
            <ul>
                @foreach ( $computers as $computer )
                    <a href="{{route('computers.show',['computer'=>$computer['id']])}}">
                        <li>
                            <p>{{$computer['name']}} is from {{$computer['origan']}} <strong>{{$computer['price']}}$</strong>  </p>
                        </li>
                    </a>
                @endforeach
            </ul>
        @else
            <p>the are no computers to display</p>
        @endif
    </div>

@endsection
