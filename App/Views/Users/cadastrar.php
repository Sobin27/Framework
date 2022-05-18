<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-body">
            <h2>Cadastre-se</h2>
            <small>Preecha o formulário abaixo para fazer seu cadastro</small>
            
            <form name="cadastrar" method="POST" action="/Users/cadastrar">
                <div class="form-group">
                    <label for="nome">Nome <sup class="text-danger">*</sup> </label>
                    <input type="text" name="nome" class="form-control <?= $dados['nome_error'] ? 'is-invalid' : ''?>" value="<?= $dados['nome'];?>">
                </div>
                <div class="invalid-feedback">
                    <?= $dados['nome_error']?>
                </div>
                <div class="form-group">
                    <label for="nome">Email <sup class="text-danger">*</sup> </label>
                    <input type="email" name="email" class="form-control <?= $dados['email_error'] ? 'is-invalid' : ''?>" value="<?= $dados['email']?>" >
                </div>
                <div class="invalid-feedback">
                    <?= $dados['email_error']?>
                </div>
                <div class="form-group">
                    <label for="nome">Senha <sup class="text-danger">*</sup> </label>
                    <input type="password" name="senha" class="form-control  <?= $dados['senha_error'] ? 'is-invalid' : ''?>" value="<?= $dados['senha']?>">
                </div>
                <div class="invalid-feedback">
                    <?= $dados['senha_error']?>
                </div>
                <div class="form-group">
                    <label for="nome">Numero <sup class="text-danger">*</sup></label>
                    <input type="text" name="numero" class="form-control  <?= $dados['numero_error'] ? 'is-invalid' : ''?>" value="<?= $dados['celular']?>" >
                </div>
                <div class="invalid-feedback">
                    <?= $dados['numero_error']?>
                </div>

                <div class="row">
                    <div class="col">
                    <input type="submit" class="btn btn-warning" value="Enviar">
                    </div>

                    <div class="col">
                        <a href="#">Você ja possui uma conta? Faça login!</a>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>