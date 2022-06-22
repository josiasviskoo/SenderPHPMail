<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/js/uikit-icons.min.js"></script>
    </head>
    <body>
      <form action="enviar-email.php" method="post">
          <select class="uk-select" name="campo1">
              <option value="1">Opção 1</option>
              <option value="2">Opção 2</option>
          </select>
          <div class="uk-margin">
           <input class="uk-input" type="text" placeholder="Campo 2" name="campo2">
         </div>
         <div class="uk-margin">
          <button type="submit" class="uk-button uk-button-default">Enviar E-mail</button>
        </div>
</form>
    </body>
</html>
