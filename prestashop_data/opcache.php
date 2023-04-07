<?php
$opcache = opcache_get_status();

echo '<h1>OPcache Status</h1>';
echo '<table>';

echo '<tr><td>Enabled</td><td>' . ($opcache['opcache_enabled'] ? 'Yes' : 'No') . '</td></tr>';
echo '<tr><td>Cache hits</td><td>' . $opcache['opcache_statistics']['hits'] . '</td></tr>';
echo '<tr><td>Cache misses</td><td>' . $opcache['opcache_statistics']['misses'] . '</td></tr>';
echo '<tr><td>Used memory</td><td>' . round($opcache['memory_usage']['used_memory'] / 1024 / 1024, 2) . ' MB</td></tr>';
echo '<tr><td>Free memory</td><td>' . round($opcache['memory_usage']['free_memory'] / 1024 / 1024, 2) . ' MB</td></tr>';
echo '<tr><td>Wasted memory</td><td>' . round($opcache['memory_usage']['wasted_memory'] / 1024 / 1024, 2) . ' MB</td></tr>';
echo '<tr><td>Cached scripts</td><td>' . count($opcache['scripts']) . '</td></tr>';

// 添加清除缓存的链接
echo '<tr><td colspan="2"><a href="?clear_cache">Clear Cache</a></td></tr>';

echo '</table>';

// 处理清除缓存请求
if (isset($_GET['clear_cache'])) {
    opcache_reset();
    echo '<p>Cache cleared.</p>';
}
