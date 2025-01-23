<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/adote_um_focinho/reset.css" />
  <link rel="stylesheet" href="/adote_um_focinho/view/src/css/global.css" />
  <link rel="stylesheet" href="/adote_um_focinho/view/src/css/footer.css" />
  <link rel="stylesheet" href="/adote_um_focinho/view/src/css/header.css" />
  <link rel="stylesheet" href="/adote_um_focinho/view/src/css/form.css" />
  <title>Entre em contato conosco!</title>
</head>

<body>
  <main class="container">
    <?php include __DIR__ . '/./../components/form.php'; ?>
    <form id="customForm" enctype="multipart/form-data" method="post" action="">
      <?php
      $formType = 'login';
      renderForm($formType);
      ?>
      <button type="submit">Entrar</button>
    </form>
  </main>
  <div id="footer">
    <?php include __DIR__ . '/./../components/footer.php'; ?>
  </div>
</body>