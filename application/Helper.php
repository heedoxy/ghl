<?php

if (!function_exists('config')) {
    function config($key, $default = null)
    {
        $path = __DIR__ . '/../bootstrap/.config';
        if (file_exists($path)) {
            $config = parse_ini_file($path);
            return $config[$key] ?? $default;
        }
        echo "Please set config file !";
        die();
    }
}

if (!function_exists('dd')) {
    function dd(...$args)
    {
        foreach ($args as $arg) {
            echo "<pre>";
            var_dump($arg);
            echo "</pre>";
            echo "</br>";
        }
        die();
    }
}

if (!function_exists('p2e')) {
    function p2e($string)
    {
        $persian = ['۰', '۱', '۲', '۳', '۴', '٤', '۵', '٥', '٦', '۶', '۷', '۸', '۹'];
        $english = [0, 1, 2, 3, 4, 4, 5, 5, 6, 6, 7, 8, 9];
        foreach ($persian as $p) {
            if (stripos($string, $p) > 0) return str_replace($persian, $english, $string);
        }
        return $string;
    }
}

if (!function_exists('clean')) {
    function clean($input, $hasHtml = false)
    {
        if (!$hasHtml) {
            $input = htmlspecialchars($input);
            $input = strip_tags($input);
        }
        return is_array($input) ? $input : stripslashes($input);
    }
}

if (!function_exists('get')) {
    function get($name, $hasHtml = false)
    {
        $input = clean($_GET[$name], $hasHtml);
        return is_array($input) ? $input : p2e($input);
    }
}

if (!function_exists('post')) {
    function post($name, $hasHtml = false)
    {
        $input = clean($_POST[$name], $hasHtml);
        return is_array($input) ? $input : p2e($input);
    }
}

if (!function_exists('request')) {
    function request($name, $hasHtml = false)
    {
        $input = clean($_REQUEST[$name], $hasHtml);
        return is_array($input) ? $input : p2e($input);
    }
}

if (!function_exists('posted')) {
    function posted($name)
    {
        return isset($_REQUEST[$name]);
    }
}

if (!function_exists('token')) {
    function token($length)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet .= "0123456789";
        $max = strlen($codeAlphabet);
        for ($i = 0; $i < $length; $i++) {
            $token .= $codeAlphabet[rand(0, $max - 1)];
        }
        return $token;
    }
}

if (!function_exists('url')) {
    function url()
    {
        $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        return $url;
    }
}

if (!function_exists('info')) {
    function info($message)
    {
        $_SESSION['TOASTER-INFO'] = $message;
    }
}

if (!function_exists('success')) {
    function success($message)
    {
        $_SESSION['TOASTER-SUCCESS'] = $message;
    }
}

if (!function_exists('warning')) {
    function warning($message)
    {
        $_SESSION['TOASTER-WARNING'] = $message;
    }
}

if (!function_exists('error')) {
    function error($message)
    {
        $_SESSION['TOASTER-ERROR'] = $message;
    }
}

if (!function_exists('success_saved')) {
    function success_saved($message = null)
    {
        $message = $message ?? 'با موفقیت ذخیره شد.';
        success($message);
    }
}

if (!function_exists('success_edited')) {
    function success_edited($message = null)
    {
        $message = $message ?? 'با موفقیت به روز رسانی شد.';
        success($message);
    }
}

if (!function_exists('success_removed')) {
    function success_removed($message = null)
    {
        $message = $message ?? 'با موفقیت حذف شد شد.';
        success($message);
    }
}

if (!function_exists('success_edited')) {
    function success_edited($message = null)
    {
        $message = $message ?? 'اطلاعات مورد نظر با موفقیت به روز رسانی شد';
        success($message);
    }
}

if (!function_exists('go')) {
    function go($path)
    {
        header("Location: $path");
        die();
    }
}

if (!function_exists('now')) {
    function now()
    {
        return date('Y-m-d H:i:s');
    }
}