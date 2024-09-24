<?php
// รับ IP ของผู้ใช้งาน
$user_ip = $_SERVER['REMOTE_ADDR'];

// ใช้ API เพื่อดึงข้อมูลจาก ipinfo
$api_url = "http://ipinfo.io/{$user_ip}/json";
$response = file_get_contents($api_url);
$data = json_decode($response, true);

// แสดงข้อมูล
echo "<h1>ข้อมูลที่อยู่ IP ของคุณ</h1>";
echo "<p><strong>IP Address:</strong> " . $data['ip'] . "</p>";
echo "<p><strong>City:</strong> " . $data['city'] . "</p>";
echo "<p><strong>Region:</strong> " . $data['region'] . "</p>";
echo "<p><strong>Country:</strong> " . $data['country'] . "</p>";
echo "<p><strong>Location (Lat, Long):</strong> " . $data['loc'] . "</p>";
echo "<p><strong>ISP:</strong> " . $data['org'] . "</p>";
?>
