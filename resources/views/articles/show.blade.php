<x-main>
    <div class="container my-5">
        <span class="text-info fw-bold">{{ $article->category }}</span>
        <h1>{{ $article->title }}</h1>
        <div class="">
            {{ $article->body }}
        </div>
    </div>
</x-main>