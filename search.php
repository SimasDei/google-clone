<?php 
  $term = $_GET['term'] ?  $_GET['term'] : exit('No Search Query');
  $type = isset($_GET['type']) ? $_GET['type'] : 'sites';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <title>Google Clone</title>
  </head>
  <body>
    <div class="wrapper search-page">
      <header class="header">
        <div class="header-content">
          <div class="logo-container">
            <a href="./index.php">
              <img src="./assets/logo2.png" alt="logo" />
            </a>
          </div>
          <div class="search-container">
            <form action="./search.php" method="GET">
              <div class="search-bar-container">
                <input type="text" class="search-box" name="term" />
                <button class="search-button">
                  <img src="./assets/icons/search.png" alt="search" />
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="tabs-container">
          <ul class="tab-list">
            <li 
            class="<?php echo $type == 'sites' ? 'active': '' ?>">
            <a href='<?php echo "search.php?term=$term&type=sites"; ?>'>Sites</a>
          </li>
            <li  
            class="<?php echo $type == 'images' ? 'active': '' ?>">
            <a href='<?php echo "search.php?term=$term&type=images"; ?>'>Images</a>
          </li>
          </ul>
        </div>
      </header>
    </div>
  </body>
</html>
