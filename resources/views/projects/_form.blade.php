       
       
       @csrf

       <div class="form-group">
              <label for="">Titulo del Projecto:</label><br>
              <input class="form-control bg-light shadow-sm"
              type="text" 
              name="title" 
              value="{{ old('title', $project->title) }}"
              >
       </div>
       <div class="form-group">
              <label for="">URL del Projecto:</label>
              <input class="form-control bg-light shadow-sm"
              type="text" 
              name="url" 
              value="{{ old('url', $project->url) }}"
              >
       </div>
       <div class="form-group">

              <label for="">Descripción del Projecto:</label>   
              <textarea class="form-control bg-light shadow-sm"
              name="description"
              cols="30" rows="10"
              >{{ old('description', $project->description) }}</textarea>

       </div>

        <button class="btn btn-primary btn-lg btn-block">
               {{ $botonEnviar }}
       </button>

       <a     class="btn btn-link btn-block"
              href="{{ route('projects.index') }}">
              Cancelar
       </a>