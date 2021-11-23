<div>
    Posts
    <p>{{ $msg }}</p>

    <input type='text' name='msg' id='msg' wire:model='msg'>
    <hr><br>

    <form method='post' wire:submit.prevent='create'>
        <button type='submit'>Enviar</button>
    </form>


    @forelse ($posts as $post)
        <p> {{ $post->title }} </p>

    @empty
        <p>Nenhum registro</p>

    @endforelse
</div>
