<?php

class Log extends Database
{
    public function list()
    {
        return $this->table_list("logs");
    }

    public function add($action)
    {
        $now = now();
        $auth = new Auth();
        $user = $auth->get();
        $ip = $this->getIPAddress();
        $browser = $this->getUserBrowser();
        $os = $this->getUserOperationSystem();

        $result = $this->connection->prepare("INSERT INTO `logs` (`user_id`,`action`,`os`,`browser`,`ip`,`created_at`) 
        VALUES (?,?,?,?,?,?)");
        $result->execute([$user, $action, $os, $browser, $ip, $now]);
        if (!$this->result($result)) return false;
        return $this->connection->lastInsertId();
    }


    public function getIPAddress()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function getUserBrowser()
    {
        $agent = $_SERVER["HTTP_USER_AGENT"];
        if (preg_match('/MSIE (\d+\.\d+);/', $agent)) {
            return "Internet Explorer";
        } else if (preg_match('/Edg\/\d+/', $agent)) {
            return "Edge";
        } else if (preg_match('/Chrome[\/\s](\d+\.\d+)/', $agent)) {
            return "Chrome";
        } else if (preg_match('/Firefox[\/\s](\d+\.\d+)/', $agent)) {
            return "Firefox";
        } else if (preg_match('/OPR[\/\s](\d+\.\d+)/', $agent)) {
            return "Opera";
        } else if (preg_match('/Safari[\/\s](\d+\.\d+)/', $agent)) {
            return "Safari";
        }
        return $agent;
    }

    public function getUserOperationSystem()
    {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $os_platform = "Unknown OS Platform";
        $os_array = array(
            '/windows nt 10/i' => 'Windows 10',
            '/windows nt 6.3/i' => 'Windows 8.1',
            '/windows nt 6.2/i' => 'Windows 8',
            '/windows nt 6.1/i' => 'Windows 7',
            '/windows nt 6.0/i' => 'Windows Vista',
            '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',
            '/windows nt 5.1/i' => 'Windows XP',
            '/windows xp/i' => 'Windows XP',
            '/windows nt 5.0/i' => 'Windows 2000',
            '/windows me/i' => 'Windows ME',
            '/win98/i' => 'Windows 98',
            '/win95/i' => 'Windows 95',
            '/win16/i' => 'Windows 3.11',
            '/macintosh|mac os x/i' => 'Mac OS X',
            '/mac_powerpc/i' => 'Mac OS 9',
            '/linux/i' => 'Linux',
            '/ubuntu/i' => 'Ubuntu',
            '/iphone/i' => 'iPhone',
            '/ipod/i' => 'iPod',
            '/ipad/i' => 'iPad',
            '/android/i' => 'Android',
            '/blackberry/i' => 'BlackBerry',
            '/webos/i' => 'Mobile'
        );
        foreach ($os_array as $regex => $value)
            if (preg_match($regex, $user_agent))
                $os_platform = $value;
        return $os_platform;
    }
}