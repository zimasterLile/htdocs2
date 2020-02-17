<?php


namespace Models\Logic;

use Database\Database;
use http\Env\Request;

class Authorization
{
    private $login;
    private $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    private function processing()
    {
        $profile = $this->database();
        if (empty($profile[0])) return 10;
        if ($this->password !== $profile[1]) return 11;
        elseif ($profile[2] == 'admin') {
            $_SESSION['login'] = $profile[0];
            $_SESSION['password'] = $profile[1];
            return 1;
        } else
            $_SESSION['login'] = $profile[0];
        $_SESSION['password'] = $profile[1];
        return 2;
    }

    private function database()
    {
        $query = "SELECT login, password, status FROM users 
                  WHERE users.login = '{$this->login}'";
        $res = mysqli_query(Database::connect(), $query);
        return $res->fetch_row();
    }

    public function validate()
    {
        if (!empty($_POST['auth']))
            if ($_POST['auth'] == 'Войти') {
                return $this->processing();
            }
        return null;
    }
}

class Registration
{
    private $name;
    private $lastname;
    private $email;
    private $login;
    private $password;

    public function __construct($name, $lastname, $email, $login, $password)
    {
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->name = $name;
        $this->lastname = $lastname;
    }

    public function processing()
    {
        if (($temp = $this->validate()) !== true) return $temp;
        return $this->userAdd();
    }

    private function validate()
    {
        if (!empty($this->database())) return 12;
        $split = [str_split($this->login), str_split($this->password)];
        if ($split[0][0] !== strtoupper($split[0][0])) return 13;
        if (count($split[0]) < 4) return 14;
        if ($split[1][0] !== strtoupper($split[1][0])) return 15;
        if (count($split[0]) < 6) return 16;
        if ($this->langValidate($this->name) == false) return 17;
        if ($this->langValidate($this->lastname) == false) return 18;
        if ($this->numsPasswordValidate($this->password) == false) return 19;
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL) == false) return 20;
        return true;
    }

    private function numsPasswordValidate($temp)
    {
        do {
            $tempDec = (int) $temp;
            if (is_int($tempDec)) return true;
            $temp = ($temp * 10) / 100;
        } while ($temp > 0);
        return false;
    }

    private function langValidate($text)
    {
        $yt_api_key = "trnsl.1.1.20200210T204155Z.a4fcebe04eb1a6ff.b3ebafe4d4f374192a294d381b1a289829c8a658";
        $yt_link = "https://translate.yandex.net/api/v1.5/tr.json/detect?key={$yt_api_key}&text={$text}&hint=ru&ui";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $yt_link);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        $result = curl_exec($ch);
        $data = stripos($result, '"ru"');
        curl_close($ch);
        return $data;
    }

    private function database()
    {
        $query = "SELECT login, password, status FROM users 
                  WHERE users.login = '{$this->login}' OR users.email = '{$this->email}'";
        $res = mysqli_query(Database::connect(), $query);
        return $res->fetch_row();
    }

    private function userAdd()
    {
        $query = "INSERT INTO users (id, email, login, password, first_name, last_name, status) 
        VALUES (NULL, '{$this->email}', '{$this->login}', '{$this->password}','{$this->name}', '{$this->lastname}', 'user')";
        mysqli_query(Database::connect(), $query);
        return true;
    }
}
