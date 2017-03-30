echo "My first PHP script! Example script that just says this\n";

$handle = popen("python /var/www/html/PYTHON/check_directory 680", "r");
$data = fgets($handle);
echo $data;
pclose($handle);
