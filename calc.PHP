<?php
$cookie_name1 = "num";
$cookie_value1 = "";
$cookie_name2 = "operation";
$cookie_value2 = "";

if (isset($_POST['num'])) {
    $num = $_POST['input'] . $_POST['num'];
} elseif (isset($_POST['delete'])) {
    $num = substr($_POST['input'], 0, -1);
} else {
    $num = "";
}

if (isset($_POST['operation'])) {
    $cookie_value1 = $_POST['input'];
    setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");

    $cookie_value2 = $_POST['operation'];
    setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");
    $num = "";
}

if (isset($_POST['equal'])) {
    $num = $_POST['input'];
    switch ($_COOKIE['operation']) {
        case "+":
            $result = $_COOKIE['num'] + $num;
            break;
        case "-":
            $result = $_COOKIE['num'] - $num;
            break;
        case "*":
            $result = $_COOKIE['num'] * $num;
            break;
        case "/":
            if ($num != 0) {
                $result = $_COOKIE['num'] / $num;
            } else {
                $result = "Error: Division by zero!";
            }
            break;
        case "%":
            $result = $_COOKIE['num'] % $num;
            break;
        case "log()":
            if ($_COOKIE['num'] > 0 && $num > 0 && $num != 1) {
                $result = log($_COOKIE['num'], $num);
            } else {
                $result = "Error: Invalid base for logarithm!";
            }
            break;
        case "sqrt()":
            if ($_COOKIE['num'] >= 0) {
                $result = sqrt($_COOKIE['num']);
            } else {
                $result = "Error: Negative number for square root!";
            }
            break;
        case "cbrt()":
            $result = pow($_COOKIE['num'], 1/3);
            break;
        case "square()":
            $result = pow($_COOKIE['num'], 2);
            break;
        case "exp()":
            $result = exp($_COOKIE['num']);
            break;
        default:
            $result = "Invalid operation selected";
            break;
    }
    $num = $_COOKIE['num'] . ' ' . $_COOKIE['operation'] . ' ' . $num . ' = ' . $result;
}

if (isset($_POST['clear'])) {
    $num = "";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multipurpose Calculator</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .calc {
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        fieldset {
            border: none;
        }

        legend {
            color: #fff;
            font-size: 1.5em;
        }

        .maininput {
            width: 100%;
            padding: 10px;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
            margin-bottom: 20px;
            color: #333;
        }

        .numbtn, .calbtn, .equal, .c, .del {
            width: 20%;
            padding: 10px;
            font-size: 1.2em;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #fff;
        }

        .numbtn {
            background-color: #eee;
            color: #333;
        }

        .calbtn {
            background-color: #8bc34a;
        }

        .equal {
            background-color: #f44336;
        }

        .c, .del {
            background-color: #9e9e9e;
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="calc">
        <form action="" method="post">
            <fieldset>
                <legend>Multipurpose Calculator</legend>
                <input type="text" class="maininput" name="input" value="<?php echo @$num; ?>" readonly>
                <div class="buttons">
                    <input type="submit" class="c" name="clear" value="C">
                    <input type="submit" class="del" name="delete" value="Del">
                    <input type="submit" class="calbtn" name="operation" value="exp()">
                    <input type="submit" class="calbtn" name="operation" value="%">
                    <input type="submit" class="calbtn" name="operation" value="sqrt()">
                    <input type="submit" class="calbtn" name="operation" value="cbrt()">
                    <input type="submit" class="calbtn" name="operation" value="square()">
                    <input type="submit" class="calbtn" name="operation" value="log()">
                    <input type="submit" class="numbtn" name="num" value="7">
                    <input type="submit" class="numbtn" name="num" value="8">
                    <input type="submit" class="numbtn" name="num" value="9">
                    <input type="submit" class="calbtn" name="operation" value="+">
                    <input type="submit" class="numbtn" name="num" value="4">
                    <input type="submit" class="numbtn" name="num" value="5">
                    <input type="submit" class="numbtn" name="num" value="6">
                    <input type="submit" class="calbtn" name="operation" value="-">
                    <input type="submit" class="numbtn" name="num" value="1">
                    <input type="submit" class="numbtn" name="num" value="2">
                    <input type="submit" class="numbtn" name="num" value="3">
                    <input type="submit" class="calbtn" name="operation" value="*">
                    <input type="submit" class="numbtn" name="num" value=".">
                    <input type="submit" class="numbtn" name="num" value="0">
                    <input type="submit" class="calbtn" name="operation" value="/">
                    <input type="submit" class="equal" name="equal" value="=">
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>
