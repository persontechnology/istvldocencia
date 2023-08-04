<div class="d-inline-flex">
    <div class="dropdown">
        <a href="#" class="text-body" data-bs-toggle="dropdown">
            <i class="ph-list"></i>
        </a>

        <div class="dropdown-menu dropdown-menu-end">

            <a href="{{ route('usuarios.edit',$user) }}" class="dropdown-item">
                <i class="ph ph-user-focus me-2"></i>
                Cambiar estado
            </a>

            <a href="{{ route('usuarios.show',$user) }}" class="dropdown-item">
                <i class="ph ph-user-focus me-2"></i>
                ver
            </a>

        </div>
    </div>
</div>
