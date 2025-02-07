@auth
<!-- Modal pour Ajouter un produit -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded shadow">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="addProductModalLabel">{{ __('product.add_product') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="product_name" class="form-label">{{ __('product.product_name') }}</label>
                        <input type="text" class="form-control rounded" id="product_name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">{{ __('product.price') }}</label>
                        <input type="number" class="form-control rounded" id="price" name="prix" required>
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">{{ __('product.phone') }}</label>
                        <input type="text" class="form-control rounded" id="telephone" name="telephone" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">{{ __('product.description') }}</label>
                        <textarea class="form-control rounded" id="description" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="images" class="form-label">{{ __('product.product_image') }}</label>
                        <input type="file" class="form-control rounded" id="images" name="images" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 rounded-pill">{{ __('product.add') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endauth
