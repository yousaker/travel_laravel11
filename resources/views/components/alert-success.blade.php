@if (session()->has('Add'))
    <div class="alert alert-success text-center position-fixed top-0 start-50 translate-middle-x p-3 rounded shadow"
         role="alert"
         id="success-alert"
         style="margin-top: 20px; z-index: 1050; min-width: 300px;">
        <strong>{{ session()->get('Add') }}</strong>
    </div>
@endif
