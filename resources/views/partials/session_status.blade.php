

@if(session('status'))

    <div class="alert alert-primary fade show">
        {{ session('status') }}

        <button type="button"
                class="close"
                data-dismiss="alert"
                aria-label="Close">
            <span>
                &times;
            </span>
        </button>
    </div>

@endif