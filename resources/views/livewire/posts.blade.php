<div>
    Posts
    <p>{{ $title }}</p>

    <hr><br>

    <form method='post' wire:submit.prevent='create'>
        <input type="text" name="title" id="title" wire:model='title'>
        @error('title')
            {{ $message }}
        @enderror
        <button type='submit'>Enviar</button>
    </form>


    @forelse ($posts as $post)
        <p> {{ $post->title }} </p>

    @empty
        <p>Nenhum registro</p>

    @endforelse
</div>
