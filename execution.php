<?php
include 'autoloader.php';
$input = $_POST['postinput'];
$pieces = explode(" ", $input);

$keyword = strtolower($pieces[0]);

switch ($keyword)
{
    //favourite [number] komanda simuliacijos būdu įvykdys __isset(), __unset(), __get(), __set(), __destruct() metodus
    case 'favourite':
        $value1 = $pieces[1];

        $obj = new app\classes2\Person\Person();
        $obj->favourite = $value1;
        if (isset($obj->favourite))
        {
            echo ("Your favourite number is $obj->favourite <br/>");
            unset($obj->favourite);

            if (isset($obj->favourite))
            {
                echo ("Your favourite number haven't changes. It must have been a mistake! <br/>");
            }
            else
            {
                echo ("Your favourite number was deleted! <br/>");
            }
        }
        else
        {
            echo ("Please write your favourite number! <br/>");
        }

        break;

    //  robot create [vardas]* komanda sukurs tiek robotų, kiek buvo įvesta vardų išpildydama __construct() metodą.
    //  robot [eat/walk] komandos duoda konkretų output'ą, tuo tarpu nežinomos komandos kvies __call() metodą.
    //  robot random [didžiausias skaičius] komanda sugeneruos skaičių mažesnį už nurodytą, naudojant __invoke() metodą.
    case 'robot':
        $robots = array();
        $counter = 0;
        $code = strtolower($pieces[1]);

        if ($code == "create")
        {
            foreach ($pieces as $name)
            {
                if ($counter > 1)
                {
                    $robots[app\classes1\Robot\Robot::GetCount()] = new app\classes1\Robot\Robot($name);
                    echo "Robot called $name was created! <br/>";
                }
                $counter++;
            }
        }
        else if ($code == "random")
        {
            $max = $pieces[2];
            $filler = new app\classes1\Robot\Robot("example");
            echo "Robot has generated you: " . $filler($max);
        }
        else
        {
            $filler = new app\classes1\Robot\Robot("example");
            $filler->$code();
        }
        break;

    //  system [increase] komanda duoda konkretų output'ą, tuo tarpu nežinoma komanda kvies __callStatic() metodą.
    case 'system':
        $code = strtolower($pieces[1]);
        echo app\classes1\Robot\Robot::$code();
        break;

    case 'clear':
        echo "Boom";
        break;

    //  account [vardas] [slaptažodis] komanda išspausdina įrašytus duomenis prieš apdorojimą ir po apdorojimo
    //  naudojant __sleep() ir __wakeup() metodus. Praktinė nauda būtų prijungus duombazę. Kaip pavyzdys buvo
    //  paimtas mano vardas kaip raktas slaptažodžio atrinkimui. Galiausiai spausdinimui panaudotas __toString() metodas
    case 'account':
        $name = $pieces[1];
        $password = $pieces[2];

        $instance = new app\classes1\Account\Account($name, $password);
        echo $instance;

        echo "Po serialize() ir unserialize(): <br/>";
        $data = serialize($instance);
        echo unserialize($data);
        break;


    case 'setstate':
        $a = new app\classes2\Data\Data();
        $a->game = "example-name";
        $a->version = 20;
        echo("Invalid PHP: <br/>");
        echo(var_export($a));
        echo("<br/>Valid PHP: <br/>");

        eval('$b = ' . var_export($a, true) . ';');
        var_dump($b);
        break;

    //  create-update komanda sukuria objektą ir naudojantis __clone metodu sukuria pirmo metodo kloną, tik klonuojant
    //  dar pakeičia versiją. Būtent klonavimo būdui aprašyti ir reikalingas __clone metodas.
    case 'create-update':
        $one = new app\classes2\Data\Data();
        $one->game = "Tetris";
        $one->version = 0.0;

        echo $one;
        $two = clone $one;
        echo $two;
        break;

    //  metodas __debugInfo leidžia modifikuoti var_dump komandos elgseną
    case 'debug-info':
        echo "Custom var_dump: <br/>";
        $ex = new app\classes2\Person\Person();
        $ex->number = 5;
        var_dump($ex);
        break;

    default:
        echo "command not found";
        break;
}