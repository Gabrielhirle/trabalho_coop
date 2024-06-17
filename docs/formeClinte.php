<div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6 m-3 p-3">
          <h1>cadastro de clinte</h1>
          <form action="cadastroAnimal.php" method="post">
           
            <div class="mb-3">
             <label class="form-label" for="nome">nome do cliente</label>
             <input class="form-control" type="text" name="nome" required>
            </div>
           
            <div class="mb-3">
            <label class="form-label" for="CPF">CPF</label>
             <input class="form-control" type="text" name="CPF" required>
            </div>
            <div class="mb-3">
              <label for="dn">data de nascimento</label>
              <input type="date" class="form-control">
            </div>
            <div class="mb-3">
                <label for="genero"></label>
             <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="genero" value="F">
               <label class="foem-check-label" for="genero">feminino</label>
             </div>
             <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="genero" value="M">
               <label class="foem-check-label" for="genero">masculino</label>
             </div>
             <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="genero" value="O">
               <label class="foem-check-label" for="genero">outros</label>
             </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="cep">cep</label>
              <input name="cep "type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label" for="email">E-mail</label>
              <input type="email" class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label" for="telefone">telefone</label>
              <input name="telefone" type="number" id="telefone" size="60" class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label" for="rua">rua</label>
              <input name="rua" type="text" id="rua" size="60" class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label" for="bairro">bairro</label>
              <input name="bairro" type="text" id="bairro" size="40" class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label" for="numero">numero</label>
              <input name="numero" type="number" id="numero" size="5" class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label" for="propriedade rural">propriedade rural</label>
              <input name="propriedade rural" type="text" id="propriedade rural" size="60" class="form-control">
            </div>

            <label>Cep:
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" /></label><br />
        <label>Rua:
        <input name="rua" type="text" id="rua" size="60" /></label><br />
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" /></label><br />
        <label>Cidade:
        <input name="cidade" type="text" id="cidade" size="40" /></label><br />
        <label>Estado:
        <input name="uf" type="text" id="uf" size="2" /></label><br />
        <label>IBGE:
        <input name="ibge" type="text" id="ibge" size="8" /></label><br />
           
            <input type="submit" class="btn btn-outline-success" value="salvar">
            <input type="button" class="btn btn-outline-danger" value="cancelar">
          </form>
        </div>
        
        <div class="col-md-3"></div>
     </div>

     <script>
    
    function limpa_formulário_cep() {
           
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
         
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } 
        else {
          
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

      
        var cep = valor.replace(/\D/g, '');

        
        if (cep != "") {

            
            var validacep = /^[0-9]{8}$/;

          
            if(validacep.test(cep)) {

             
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                
                var script = document.createElement('script');

               
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

               
                document.body.appendChild(script);

            } 
            else {
               
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } 
        else {
          
            limpa_formulário_cep();
        }
    };
</script>