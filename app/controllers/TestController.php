<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class TestController extends Controller
{
    public function db()
    {
        echo "VERSION 3<br>";
        echo "HOST: " . getenv('DB_HOST') . "<br>";
        echo "PORT: " . getenv('DB_PORT') . "<br>";
        echo "USER: " . getenv('DB_USER') . "<br>";
        echo "NAME: " . getenv('DB_NAME') . "<br>";
        echo "PASS set: " . (getenv('DB_PASSWORD') ? 'oo' : 'HINDI') . "<br>";

        try {
            $this->call->database();
            echo "database loaded<br>";
            $res = $this->db->raw('SELECT NOW() AS now');
            echo '<pre>';
            var_dump($res);
        } catch (Throwable $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }
}