@auth
<!-- Modal pour Ajouter une publication -->
<div class="modal fade" id="addTahwissaModal" tabindex="-1" aria-labelledby="addTahwissaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded shadow">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="addTahwissaModalLabel">{{ __('tahwissa.add_tahwissa') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{ __('tahwissa.close') }}"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="titre" class="form-label">{{ __('tahwissa.title') }}</label>
                            <input type="text" class="form-control rounded" id="titre" name="titre" required>
                        </div>
                        <div class="col-md-6">
                            <label for="categorie" class="form-label">{{ __('tahwissa.category') }}</label>
                            <select class="form-control rounded" id="categorie" name="categorie" required>
                                <option value="">{{ __('tahwissa.select_category') }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name_Categories }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="wilaya" class="form-label">{{ __('tahwissa.wilaya') }}</label>
                            <select class="form-control rounded" id="wilaya" name="wilaya" required>
                                <option value="">{{ __('tahwissa.select_wilaya') }}</option>
                                <option value="1">Alger</option>
                                <option value="2">Oran</option>
                                <option value="3">Constantine</option>
                                <option value="4">Annaba</option>
                                <option value="5">Blida</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="adresse" class="form-label">{{ __('tahwissa.address') }}</label>
                            <input type="text" class="form-control rounded" id="adresse" name="adresse" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="numero_telephone" class="form-label">{{ __('tahwissa.phone') }}</label>
                            <input type="text" class="form-control rounded" id="numero_telephone" name="numero_telephone" required>
                        </div>
                        <div class="col-md-6">
                            <label for="prix" class="form-label">{{ __('tahwissa.price') }}</label>
                            <input type="number" step="0.01" class="form-control rounded" id="prix" name="prix" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="petite_description" class="form-label">{{ __('tahwissa.short_description') }}</label>
                            <textarea class="form-control rounded" id="petite_description" name="petite_description" rows="2"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="nombre_de_jours" class="form-label">{{ __('tahwissa.days') }}</label>
                            <input type="number" class="form-control rounded" id="nombre_de_jours" name="nombre_de_jours">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">{{ __('tahwissa.description') }}</label>
                        <textarea class="form-control rounded" id="description" name="description" rows="4"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image_tahwissa" class="form-label">{{ __('tahwissa.image_tahwissa') }}</label>
                        <input type="file" class="form-control rounded" id="image_tahwissa" name="image_tahwissa" accept="image/*" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 rounded-pill">{{ __('tahwissa.add') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endauth
