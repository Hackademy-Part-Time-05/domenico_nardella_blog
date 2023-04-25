<x-main>
    <div class="container mt-5">
        <h1>Categorie</h1>
        
        <x-success />

        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td class="text-end">
                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-secondary">modifica</a>

                        <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger ms-2">candella</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $categories->links()}}
    </div>
</x-main>