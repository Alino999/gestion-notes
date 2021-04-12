<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes</title>
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="content">
        <h3 class="text-center ">Les Notes </h3> <hr>
        {{-- <a href="{{ route('posts.show', $post->id)) }}"> --}}
          {{-- <h1 class="title">{{ $post ?? ''->title }}</h1> --}}
          {{-- created_at->diffForHumans() , [$post ?? ''->slug]--}}
        {{-- </a> --}}
        <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Math</th>
                    <th scope="col">FR</th>
                    <th scope="col">Ang</th>
                    <th scope="col">SVT</th>
                    <th scope="col">EPS</th>
                    <th scope="col">HG</th>
                    <th scope="col">Action</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                @foreach ($posts as $post)
                <tbody>
                  <tr>
                    <th scope="row">{{ $post->id}}</th>
                    <td>{{ $post->nom}}</td>
                    <td>{{  $post->prenom}}</td>
                    <td>{{  $post->maths }}</td>
                    <td>{{  $post->fr }}</td>
                    <td>{{  $post->ang }}</td>
                    <td>{{  $post->svt }}</td>
                    <td>{{  $post->eps }}</td>
                    <td>{{  $post->hg }}</td>
                    <td>
                        <form method="post" action="{{ route('posts.destroy',$post->id) }}">
                            @csrf
                             @method('delete')
                                <div class="field is-grouped">
                                <div class="control">
                                    <a
                                    href="{{ route('posts.edit',$post->id)}}"
                                    class="button is-info is-outlined btn"
                                    >
                                    Modifier
                                    </a>
                                </div>

                                </div>

                            </td>
                            <td><div class="control">
                                <button type="submit" class="button is-danger is-outlined">
                                Supprimer
                                </button>
                            </div></td>
                        </form>
                  </tr>

                </tbody>

                @endforeach
              </table>
        </div>

      </div>
</body>
</html>

