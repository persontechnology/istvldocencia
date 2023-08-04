<div class="d-inline-flex">
    <div class="dropdown">
        <a href="#" class="text-body" data-bs-toggle="dropdown">
            <i class="ph-list"></i>
        </a>

        <div class="dropdown-menu dropdown-menu-end">
            <a href="{{ route('certificados.destroy',$t->id) }}" data-msg="{{ $t->nivel }}" onclick="event.preventDefault(); eliminar(this)" class="dropdown-item">
                <i class="ph ph-trash me-2"></i>
                Eliminar
            </a>
        </div>
    </div>
</div>