<div>
    Posts
    <div class="">
            <input type="text" name="search" id="search" wire:model='search'>
    </div>
    <hr><br>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        
    @endif
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method='post' wire:submit.prevent='create'>
        @csrf
        <input type="text" name="title" id="title" wire:model='title'> 
            @error('title') {{ $message }} @enderror
        <input type="text" name="body" id="body" wire:model='body'>
            @error('body') {{ $message }} @enderror
            
        
            <button type='submit'>Enviar</button>
    </form>


    @forelse ($posts as $post)
        <p> {{ $post->title }} </p>

    @empty
        <p>Nenhum registro</p>

    @endforelse

    <div class="">
        {{ $posts->links() }}
    </div>
</div>
