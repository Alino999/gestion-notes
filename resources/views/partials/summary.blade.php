<div class="content">
    <a href="{{ route('posts.show', [$post ?? ''->slug]) }}">
      <h1 class="title">{{ $post ?? ''->title }}</h1>
      {{-- created_at->diffForHumans() , [$post ?? ''->slug]--}}
    </a>
    <p><b>Nom:</b> {{ $post ?? '' ?? 'nom' }}</p>
    <p><b>Prénom:</b> {{ $post ?? '' ?? 'prenom' }}</p>
    <p><b>Nom:</b> {{ $post ?? '' ?? 'maths' }}</p>
    <p><b>Prénom:</b> {{ $post ?? '' ?? 'fr' }}</p>
    <p><b>Nom:</b> {{ $post ?? '' ?? 'ang' }}</p>
    <p><b>Prénom:</b> {{ $post ?? '' ?? 'svt' }}</p>
    <p><b>Nom:</b> {{ $post ?? '' ?? 'eps' }}</p>
    <p><b>Prénom:</b> {{ $post ?? '' ?? 'hg' }}</p>
    {{-- <p>{!! nl2br(e($post ?? ''->content)) !!}</p> --}}

    <form method="post" action="{{ route('posts.destroy') }}">
      @csrf
       @method('delete')
      <div class="field is-grouped">
        <div class="control">
          <a
            href="{{ route('posts.edit', [$post ?? ''->slug])}}"
            class="button is-info is-outlined"
          >
            Modifier
          </a>
        </div>
        <div class="control">
          <button type="submit" class="button is-danger is-outlined">
            Supprimer
          </button>
        </div>
      </div>
    </form>
  </div>
