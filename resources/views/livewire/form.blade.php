<div class="form-group">
    <label for="">Título</label>
    <input type="text" class="form-control" wire:model="title">
    @error('title')
        <span>{{ $message}}</span>
    @enderror
</div>

<div class="form-group">
    <label for="">Contenido</label>
    <textarea  class="form-control" wire:model="body"></textarea>
    @error('body')
        <span>{{ $message}}</span>
    @enderror
</div>

