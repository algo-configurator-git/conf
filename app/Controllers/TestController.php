<?php

namespace App\Controllers;

use Config\Database;

class TestController extends BaseController
{
    public function testConnections()
    {
        $db1 = Database::connect('default');
        $db2 = Database::connect('remote');

        if ($db1->connect()) {
            echo "Connected default db successfully<br/>";
        } else {
            echo "Connection default db failed<br/>";
        }

        if ($db2->connect()) {
            echo "Connected remote db successfully<br/>";
        } else {
            echo "Connection remote db failed<br/>";
        }

        try {
            $query1 = $db1->query("SELECT 1")->getResult();
            echo "✅ Query to default db executed successfully!<br/>";
        } catch (\Throwable $e) {
            echo "❌ Query to default db failed: " . $e->getMessage() . "<br/>";
        }

        try {
            $query2 = $db2->query("SELECT 1")->getResult();
            echo "✅ Query to remote db executed successfully!<br/>";
        } catch (\Throwable $e) {
            echo "❌ Query to remote db failed: " . $e->getMessage() . "<br/>";
        }

        dd(session()->get('assembly'));
    }
}
