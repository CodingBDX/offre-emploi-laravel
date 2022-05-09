<div>

    <div class="shadow-sm rounded border border-gray-200 hover:shadow-md">
        <a href="{{ route('jobs.show', $job->id) }}">
            <h1 class="text-xl text-green-500 my-5 mx-4 font-bold">{{ $job->title }}</h1>
        </a>
        <p>{{ $job->description }}</p>
        <div class="flex justify-between">
            <time class="text-gray-500">{{ $job->price }}€</time>
            <div>
                <button>{{ $job->likes()->count() }}</button>
                <button
                    class="h-8 w-8 text-xl  fa-solid fa-heart-circle-bolt {{ $job->isLiked() ? 'text-red-800' : 'text-gray-400' }}"
                    wire:click="addLike"></button>
            </div>
        </div>
        !
    </div>

</div>
