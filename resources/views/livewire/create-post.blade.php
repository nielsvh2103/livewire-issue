<div class="container">
    <form wire:submit="save">
        <label for="title">Title:</label>

        <input type="text" id="title" wire:model.live="form.title">

        <textarea wire:model.live="form.description"
                  wire:ignore.style.height
                  @if($this->disableTextarea) disabled @endif></textarea>

        <button type="submit">Save</button>
    </form>
</div>
