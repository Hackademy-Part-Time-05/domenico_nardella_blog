<x-main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-12">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $article->title) }}" maxlength="150"
                                class="form-control @error('title') is-invalid @enderror">
                        {{-- @error('title') <span class="small text-danger">{{ $message }}</span>@enderror --}}
                    </div>
                    <div class="col-12">
                        <label for="category">Categoria</label>
                            @foreach ($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input" 
                                    name="categories[]" 
                                    type="checkbox" 
                                    value=" {{ $category->id }}"
                                    @checked($article->categories->contains($category->id))
                                    >
                                <label class="form-check-label" for="flexCheckDefault">
                                 {{ $category->name}}
                                </label>
                              </div> 
                            @endforeach
                    
                        {{-- <input type="text" name="category" id="category" value="{{old('category')}}"
                                class="form-control @error('category') is-invalid @enderror">
                        @error('category') <span class="small text-danger">{{ $message }}</span>@enderror --}}
                    </div>
                    <div class="col-12">
                        <label for="body">Corpo</label>
                        <textarea name="body" id="body" 
                                class="form-control @error('body') is-invalid @enderror" 
                                rows="10"
                                >{{old('body', $article->body)}}</textarea>
                        @error('body') <span class="small text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-12">
                        <label for="image">Immaggine</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main>