<x-main>
    <div class="container mt-5">
        <div class="row">
            <div class="col 6">
                <h1>I miei articoli</h1>
            </div>
            <div class="col 6 text-end">
                <a href="{{route('articles.create')}}"class="btn btn-primary">Crea Articolo</a>
            </div>
        </div>
       

        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Categoria</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->category }}</td>
                    <td class="text-end">
                        <a href="{{route('articles.show', $article)}}">visualizza</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-main>