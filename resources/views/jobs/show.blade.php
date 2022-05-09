@extends('layouts.app')

@section('content')
    <h1 class="text-3xl text-green-500 mb-5">{{ $job->title }}</h1>
    <p class="text-base text-gray-700 mb-4">
        {{ $job->description }}
    </p>
    <a href="{{ $job->price }}"
        class="bg-green-500 text-white hover:bg-green-700 transition ease-in-out duration-500 rounded-md shadow-md px-4 py-2 mt-3">Soumettre
        une proposition</a>

    <section x-data="{ open: false }">
        <a href="#" class="text-green-500" @click="open = !open">Cliquez ici pour poster une annonce</a>
        <form method="POST" action="{{ route('proposals.store', $job) }}" class="w-full max-w-md p-2 font-thin"
            x-show="open" x-cloak>
            @csrf
            <textarea name="content" id="" cols="30" rows="10"></textarea>
            <button type="submit" class="block bg-green-700">soumettre </button>
        </form>

    </section>
@endsection
