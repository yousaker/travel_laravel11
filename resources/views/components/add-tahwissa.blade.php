@auth
<!-- Modal pour Ajouter une publication -->
<div class="modal fade" id="addTahwissaModal" tabindex="-1" aria-labelledby="addTahwissaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded shadow">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="addTahwissaModalLabel">Ajouter une Tahwissa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <!-- حقل العنوان -->
                        <div class="col-md-6">
                            <label for="titre" class="form-label">Titre</label>
                            <input type="text" class="form-control rounded" id="titre" name="titre" required>
                        </div>
                        <!-- حقل الفئة -->
                        <div class="col-md-6">
                            <label for="categorie" class="form-label">Catégorie</label>
                            <select class="form-control rounded" id="categorie" name="categorie" required>
                                <option value="">Sélectionner une catégorie</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name_Categories }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <!-- حقل الولاية -->
                        <div class="col-md-6">
                            <label for="wilaya" class="form-label">Wilaya</label>
                            <select class="form-control rounded" id="wilaya" name="wilaya" required>
                                <option value="">Sélectionner une wilaya</option>
                                <option value="1">Alger</option>
                                <option value="2">Oran</option>
                                <option value="3">Constantine</option>
                                <option value="4">Annaba</option>
                                <option value="5">Blida</option>
                                <option value="6">Batna</option>
                                <option value="7">Tlemcen</option>
                                <option value="8">Sétif</option>
                                <option value="9">Chlef</option>
                                <option value="10">Béjaïa</option>
                                <option value="11">Biskra</option>
                                <option value="12">Tizi Ouzou</option>
                                <option value="13">Sidi Bel Abbès</option>
                                <option value="14">Médéa</option>
                                <option value="15">El Oued</option>
                                <!-- Add more wilayas as needed -->
                            </select>
                        </div>

                        <!-- حقل العنوان -->
                        <div class="col-md-6">
                            <label for="adresse" class="form-label">Adresse</label>
                            <input type="text" class="form-control rounded" id="adresse" name="adresse" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <!-- حقل رقم الهاتف -->
                        <div class="col-md-6">
                            <label for="numero_telephone" class="form-label">Numéro de téléphone</label>
                            <input type="text" class="form-control rounded" id="numero_telephone" name="numero_telephone" required>
                        </div>
                        <!-- حقل السعر -->
                        <div class="col-md-6">
                            <label for="prix" class="form-label">Prix</label>
                            <input type="number" step="0.01" class="form-control rounded" id="prix" name="prix" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <!-- حقل الوصف القصير -->
                        <div class="col-md-6">
                            <label for="petite_description" class="form-label">Petite Description</label>
                            <textarea class="form-control rounded" id="petite_description" name="petite_description" rows="2"></textarea>
                        </div>
                        <!-- حقل عدد الأيام -->
                        <div class="col-md-6">
                            <label for="nombre_de_jours" class="form-label">Nombre de jours</label>
                            <input type="number" class="form-control rounded" id="nombre_de_jours" name="nombre_de_jours">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control rounded" id="description" name="description" rows="4"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image_tahwissa" class="form-label">Image du Tahwissa</label>
                        <input type="file" class="form-control rounded" id="image_tahwissa" name="image_tahwissa" accept="image/*" required>
                    </div>


                    <button type="submit" class="btn btn-primary w-100 rounded-pill">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endauth
