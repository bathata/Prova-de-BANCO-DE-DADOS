<!DOCTYPE html>

  <html>

      <head>

        <title>Novo Usuário</title>
        <link rel="stylesheet" href="style.css">

      </head>


      <body>

        <header> 

          <h1>Novo Usuário</h1>

        </header>


        <nav>

          <p text-align='center'><a href="index.php">Voltar à página inicial</a></p>

        </nav>


        <main>


            <form method="post" action="novo_usuario_confirmacao.php">

              <label>Nome:</label>
              <input type="text" name="nome" required>
              <br> <br> <br>
              <label>E-mail:</label>
              <input type="email" name="email" required>
              <br>
              <input type="submit" value="Salvar">

            </form>



        </main> 


        <footer>

          <p> Todos os direitos reservados </p>

        </footer>

      </body>


  </html>
