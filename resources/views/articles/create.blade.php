<x-main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <form action="{{route('articles.store')}}" method="POST">
                    @csrf
                    <div class="col-12">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
                        @error('title') <span class="small text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-12">
                        <label for="category">Categoria</label>
                        <input type="text" name="category" id="category" class="form-control @error('category') is-invalid @enderror">
                        @error('category') <span class="small text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-12">
                        <label for="body">Corpo</label>
                        <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror" rows="10"></textarea>
                        @error('body') <span class="small text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main>