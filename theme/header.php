<!--
 * Krunk.cn KBlog - 极简博客
 *
 * Project Link: https://kblog.krunk.cn
 * GitHub: https://github.com/KrunkZhou/KBlog
 * 
 * @author     Krunk Zhou
 * @copyright  2019 Krunk Zhou (https://krunk.cn)
-->

<head>
<title><? echo $site_title_before.$site_title_sign.$site_title ?></title>
<meta name="description" content="<? echo $site_description ?>">
<meta name="keywords" content="<? echo $site_keywords ?>">
<meta name="theme-color" content="<? echo $theme_color ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="theme/css/style.css">
<link rel="stylesheet" type="text/css" href="data/style.css">
<link rel="shortcut icon" href="favicon.ico" />
</head>

<div class="header" id="headerLogo">
<center>
<a href="<? echo $base_url ?>"><img class="logo" src="<? echo $data_folder ?>/logo.png"></a>
</center>
</div>

<div class="header" id="headerNav">
<ul>
  <li><a id="index" href="<? echo $base_url ?>">Home 主页</a></li>
  <li><a id="posts" href="posts.php">Posts 文章</a></li>
</ul>
</div>
<br>