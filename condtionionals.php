<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condtionionals</title>
</head>
<body>
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
</body>
</html>