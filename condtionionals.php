
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php
    include 'includes/header.php';
    ?>
     <?php
  $x = 3;
  if ($x == 1) {
    echo "Karter is very handsome!";
  }  
    elseif ($x == 2){
echo "Kiryu is mostly handsome!";
    }
    elseif ($x == 3){
        echo "Kiryu is ze vest in ze world!";
            }
            elseif ($x == 4){
                echo "Kiryu is not handsome!";
                    }
    else{
        echo "Kiryu is very ugly!";
    }
    $x = "number";
  switch ($x){
    case 1:
        echo "The answer is 1";
        break;
        case "number":
            echo "The answer is number";
            break;
            case 3:
                echo "The answer is 3";
                break;
                case 4:
                    echo "The answer is 4";
                    break; 
                    default:
                    echo "There is no answer";       
  }
  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>