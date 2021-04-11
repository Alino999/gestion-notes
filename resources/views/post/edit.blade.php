<div class="row" data-aos="fade-up">
    <form method="post" action="{{ route('posts.update', [$post->slug]) }}" class="row g-3">
        @csrf
        @method('patch')
        @include('partials.errors')
        <div class="col-md-6">
            <label for="validationDefault01" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" id="validationDefault01" placeholder="Nom"  required>
          </div>
          <div class="col-md-6">
            <label for="validationDefault02" class="form-label">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="validationDefault02" placeholder="Prénom"  required>
          </div>
        <div class="col-md-4">
          <label for="validationDefault01" class="form-label">Mathematiques</label>
          <input type="number" name="maths" class="form-control" id="validationDefault01" value="Mark" required>
        </div>
        <div class="col-md-4">
          <label for="validationDefault02" class="form-label">Français</label>
          <input type="number" name="fr" class="form-control" id="validationDefault02" value="Otto" required>
        </div>
        <div class="col-md-4">
          <label for="validationDefaultUsername" class="form-label">Anglais</label>
          <div class="input-group">
            {{-- <span class="input-group-text" id="inputGroupPrepend2">@</span> --}}
            <input type="number" name="ang" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
          </div>
        </div>
        <div class="col-md-5">
          <label for="validationDefault03" class="form-label">Science de la Vie et de la Terre</label>
          <input type="number" name="svt" class="form-control" id="validationDefault03" required>
        </div>
        <div class="col-md-4">
          <label for="validationDefault04" class="form-label">Education Physique et Sportive</label>
          <input type="number" name="eps" class="form-control" id="validationDefault05" required>
          {{-- <select class="form-select" id="validationDefault04" required>
            <option selected disabled value="">Choose...</option>
            <option>...</option>
          </select> --}}
        </div>
        <div class="col-md-3">
          <label for="validationDefault05" class="form-label">Histoire-Géographie</label>
          <input type="number" name="hg" class="form-control" id="validationDefault05" required>
        </div>
        {{-- <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
              Agree to terms and conditions
            </label>
          </div>
        </div> --}}
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Envoyer</button>
        </div>
      </form>
</div>
