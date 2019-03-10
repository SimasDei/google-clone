
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Google Clone</title>
</head>
<body>
  <div class="wrapper search-page">
    <header class="header">
      <div class="header-content">
        <div class="logo-container">
          <a href="./index.php">
          <img src="./assets/logo2.png" alt="logo" >
          </a>
        </div>
        <div class="search-container">
          <form action="./search.php" method="GET">
            <div class="search-bar-container">
              <input type="text" class="search-box" name="term">
              <button>
                Search
              </button>
            </div>
          </form>
        </div>
      </div>
    </header>
  </div>
</body>
</html>
