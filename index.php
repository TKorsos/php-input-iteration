<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>PHP gyakorlás</title>
</head>

<body>

  <?php

  $inputname = ['fname', 'lname', 'email', 'password', 'aboutme', 'age', 'submit'];

  print '<main class="container-lg py-5">
          <section class="row gy-3 py-3">
            <article class="col p-2">
              <form method="post" class="d-flex flex-column gap-3">' . "\n";
  foreach ($inputname as $input) {
    print "\t\t\t\t" . '<div class="form-floating">' . "\n";
    if ($input === "password") {
      print "\t\t\t\t\t" . '<input type="password" class="form-control" id="' . $input . '" name="' . $input . '" placeholder="' . $input . '">' . "\n\t\t\t\t\t" . '<label for="' . $input . '">' . ucfirst($input) . '</label>' . "\n";
    } elseif ($input === "email") {
      print "\t\t\t\t\t" . '<input type="email" class="form-control" id="' . $input . '" name="' . $input . '" placeholder="' . $input . '">' . "\n\t\t\t\t\t" . '<label for="' . $input . '">' . ucfirst($input) . '</label>' . "\n";
    } elseif ($input === "submit") {
      print "\t\t\t\t\t" . '<input type="submit" class="btn btn-primary" id="' . $input . '" name="' . $input . '">' . "\n";
    } else {
      print "\t\t\t\t\t" . '<input type="text" class="form-control" id="' . $input . '" name="' . $input . '" placeholder="' . $input . '">' . "\n\t\t\t\t\t" . '<label for="' . $input . '">' . ucfirst($input) . '</label>' . "\n";
    }
    print "\t\t\t\t" . '</div>' . "\n";
  }
  print "\t\t\t" . '</form>
      </article>
    </section>
  </main>';

  ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js" integrity="sha512-9GacT4119eY3AcosfWtHMsT5JyZudrexyEVzTBWV3viP/YfB9e2pEy3N7WXL3SV6ASXpTU0vzzSxsbfsuUH4sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>