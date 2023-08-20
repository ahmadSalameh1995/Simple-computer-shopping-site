@extends('Layout')
@section('title','create computer')
@section('content')

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8">
            <h1>create a new Computers</h1>
        </div>

        <div class="flex justify-center pt-8">
            <form action="{{ route('computers.store') }}" method="post">
                @csrf
                <div>
                    <label for="computer-name">Computer name</label><br>
                    <input id='computer-name' type="text" name="computer-name" value="{{ old('computer-name') }}"
                        id=""><br>
                    @error('computer-name')
                        <div class="form-error"><br>
                            {{ $message }}<br>
                        </div><br>
                    @enderror
                </div><br>

                <div><br>
                    <label for="computer-origan">Computer Origan</label><br>
                    <input id='computer-origan' type="text" name="computer-origan" value="{{ old('computer-origan') }}"
                        id=""><br>
                    @error('computer-origan')
                        <div class="form-error"><br>
                            {{ $message }}<br>
                        </div><br>
                    @enderror
                </div><br>

                <div><br>
                    <label for="computer-price">Computer Price</label><br>
                    <input id='computer-price' type="text" name="computer-price" value="{{ old('computer-price') }}"
                        id=""><br>
                    @error('computer-price')
                        <div class="form-error"><br>
                            {{ $message }}<br>
                        </div><br>
                    @enderror


                </div><br>

                <div><br>
                    <button type="submit">Submit</button><br>
                </div><br>

            </form>
        </div>
    </div>
@endsection
