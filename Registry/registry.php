<?php 

require_once "Helper1.php";

class Registry
{
    private static $data = [];

    public static function setData($key, $value)
    {
        if(array_key_exists($key, self::$data)) {
            echo "That key is already in use!";
        }else {
            self::$data[$key] = $value;
        }
    }

    public static function getData($key)
    {
        return isset(self::$data[$key]) ? self::$data[$key] : null;
    }

    public static function removeData($key)
    {
        if(array_key_exists($key, self::$data)) {
            unset(self::$data[$key]);
        }else {
            echo "Value with that " . $key . " key not exist.";
        }
    }
}

Registry::setData("2021", "Lenovo");
Registry::setData("2022", "Asus");
Registry::setData("2023", "Asus TUF");
$helper = new Helper1();

Registry::setData("helper", $helper);

echo Registry::getData("2023");
echo "<br>";
echo Registry::getData("2021");
echo"<br>";
echo Registry::getData("helper")->doJob("driving a car.");

?>