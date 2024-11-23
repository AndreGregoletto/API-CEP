<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BOOTSTRAP -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Busca Cep</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-10">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">CEP</span>
                    <input type="text" name="cep" id="cep" class="form-control" placeholder="xxxxx-xxx" aria-label="cep" aria-describedby="basic-addon1">
                </div>
            </div>
            
            <div class="col-2">
                <input type="button" value="Pesquisar" class="btn btn-primary" id="btnCep" >
            </div>
        </div>
        <div class="row mt-5" id="row" style="display: none;">
            <hr>
        </div>
        <div class="row mt-5" id="result" style="display: none;">
            <div class="row">
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">CEP</span>
                        <input type="text" class="form-control" aria-label="cep" aria-describedby="basic-addon1" readonly id="cepView">
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Logradouro</span>
                        <input type="text" class="form-control" aria-label="logradouro" aria-describedby="basic-addon1" readonly id="logradouro">
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Complemento</span>
                        <input type="text" class="form-control" aria-label="complemento" aria-describedby="basic-addon1" readonly id="complemento">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Unidade</span>
                        <input type="text" class="form-control" aria-label="unidade" aria-describedby="basic-addon1" readonly id="unidade">
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Bairro</span>
                        <input type="text" class="form-control" aria-label="bairro" aria-describedby="basic-addon1" readonly id="bairro">
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Localidade</span>
                        <input type="text" class="form-control" aria-label="localidade" aria-describedby="basic-addon1" readonly id="localidade">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">uf</span>
                        <input type="text" class="form-control" aria-label="uf" aria-describedby="basic-addon1" readonly id="uf">
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Estado</span>
                        <input type="text" class="form-control" aria-label="estado" aria-describedby="basic-addon1" readonly id="estado">
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Regiao</span>
                        <input type="text" class="form-control" aria-label="regiao" aria-describedby="basic-addon1" readonly id="regiao">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">ibge</span>
                        <input type="text" class="form-control" aria-label="ibge" aria-describedby="basic-addon1" readonly id="ibge">
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">gia</span>
                        <input type="text" class="form-control" aria-label="gia" aria-describedby="basic-addon1" readonly id="gia">
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">ddd</span>
                        <input type="text" class="form-control" aria-label="ddd" aria-describedby="basic-addon1" readonly id="ddd">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">siafi</span>
                        <input type="text" class="form-control" aria-label="siafi" aria-describedby="basic-addon1" readonly id="siafi">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="{{ asset('cep.js') }}"></script>
    
</body>
</html>