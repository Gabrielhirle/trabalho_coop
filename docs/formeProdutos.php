<div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6 m-3 p-3">
          <h1>cadastro de produtos</h1>
          <form action="cadastroAnimal.php" method="post">
            <div class="mb-3">
                <label for="familia" class="form-label">tipo</label>
                <select class="form-select" name="familia">
                    <option value="1">sereais</option>
                    <option value="3">produtos da cooper</option>
                    <option value="3">outros</option>
                  
                </select>
            </div>
            <div class="mb-3">
             <label class="form-label" for="nome">nome do produto</label>
             <input class="form-control" type="text" name="name">
            </div>
            <div class="mb-3">
               <label class="form-label" for="tutor">nome clinte</label>
               <input name="nome clinte" type="text" id="nome" size="40" class="form-control">
            </div>
            <div class="mb-3">
            <label class="form-label" for="porte">tipo</label>
            <select class="form-select" name="tutor">
                <option value="1">granel</option>
                <option value="2">unidade</option>
                <option value="3">embalado</option>
               </select>
            </div>
            <div class="mb-3">
            <label class="form-label" for="peso">peso</label>
             <input class="form-control" type="text" name="peso">
            </div>
            <div class="mb-3">
                <label for="genero"></label>
             
            </div>
            <div class="mb-3">
              <label for="dn">data da operacao</label>
              <input type="date" class="form-control">
            </div>
            <input type="submit" class="btn btn-outline-success" value="salvar">
            <input type="button" class="btn btn-outline-danger" value="cancelar">
          </form>
        </div>
        
        <div class="col-md-3"></div>
     </div>