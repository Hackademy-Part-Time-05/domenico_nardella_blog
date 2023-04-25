<x-main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1 class="mb-3">Crea una nuova categoria</h1>
                
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name">Nome categoria</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main>