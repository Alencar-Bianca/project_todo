<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoApp</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="sidebar">

      </div>

      <div class="content">
        <nav>
          <a href="#" class="btn btn-primary">Criar Tarefa</a>
        </nav>

        <main>
          <section class="graph">
            <div class="graph_header">
              <h2>Progresso do dia</h2>
              <hr>
            </div>

            <div class="graph_header-subtitle">
              Tarefas:
            </div>

            <div class="graph-placeholder">

              <p class="graph_header-tasks_left">Restam tarefas para serem realizadas</p>
            </div>
          </section>
          <section class="list">
            <div class="list_header">
              <select class="list_header-select" id="">
                <option value="1">Todas as tarefas</option>
              </select>
            </div>
          </section>
        </main>
      </div>
    </div>
  </body>
</html>