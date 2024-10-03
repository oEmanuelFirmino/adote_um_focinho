<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/reset.css" />
  <link rel="stylesheet" href="../css/global.css" />
  <link rel="stylesheet" href="./css/register.css" />
  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/form.css" />
  <title>Dê um novo lar a um Focinho</title>
</head>

<body>
  <div id="header">
    <?php include '../components/header.php'; ?>
  </div>
  <main class="container">
    <div id="header">
      <?php include '../components/form.php'; ?>
    </div>
    <form id="customForm" enctype="multipart/form-data" method="post" action="/api/create_pet_controller.php">
      <?php
      $formType = 'animal';
      renderForm($formType);
      ?>
      <button type="submit">Enviar</button>
    </form>
  </main>
  <div id="footer">
    <?php include '../components/footer.php'; ?>
  </div>
</body>

</html>