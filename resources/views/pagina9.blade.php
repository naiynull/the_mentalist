@extends('layout')
@section('content')

<div class="card border">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-center">
                <p class="texto">
                    <h4><strong>Pergunta 9:</strong></h4>
                </p>
            </div>
        </div>
        <form action="{{ route('dadosPagina9') }}" method="POST">
            @csrf
            <div class="form-group py-4">
                <label for="pergunta"><h3><strong>O que Patrick Jane fazia antes de trabalhar na CBI?</strong></h3></label>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="A">
                    <label class="form-check-label" for="pergunta">
                        <h5>Era um criminoso, conhecido como "Concierge do crime"</h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="B">
                    <label class="form-check-label" for="pergunta">
                        <h5>Sempre trabalhou na CBI, seguindo os passos de deu pai, Minelli</h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="C">
                    <label class="form-check-label" for="pergunta">
                        <h5>Era advogado</h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="D">
                    <label class="form-check-label" for="pergunta">
                        <h5>Era médium num carnaval e posteriormente, um falso vidente</h5>
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Próxima</button>
            <button onclick="window.location.href = '/';" type="button" class="btn btn-danger btn-sm">Desistir</button>
        </form>
    </div>
</div>

@endsection
