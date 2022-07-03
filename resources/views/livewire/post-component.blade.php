<div class="row">
    {{-- formulario de agregar y editar --}}
    <div class="col-sm-3">
        @include("livewire.$view")

    </div>

    {{-- Lista de posts --}}
    <div class="col-sm-9">
        {{-- incluye el componente de livewiretabla --}}
        @include('livewire.table')

    </div>
</div>
{{--
    https://youtu.be/kBEyGQBjGnI
    min 0:47
    --}}
