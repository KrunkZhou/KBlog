<?

/**
 * Krunk.cn KBlog - 极简博客
 *
 * Project Link: https://kblog.krunk.cn
 * GitHub: https://github.com/KrunkZhou/KBlog
 * 
 * @author     Krunk Zhou
 * @copyright  2019 Krunk Zhou (https://krunk.cn)
 */

include('function.php');

echo $html_start;

$id=cleanInput($_GET['post']);
if ($id){
	$site_title_before=get_post_title($id);
}
include($theme_folder.'/header.php');
echo nav_active("posts");

echo $post_start;


if ($id){
	$html = @file_get_contents($blog_folder.'/'.$id.'.md');

	// get title $title
	$html_arr = explode("\n", $html, 2);
	$title = $html_arr[0];
	$html = strstr($html, "\n");
	$html = ltrim($html, "\n");

	//get time stamp $time
	$html_arr = explode("\n", $html, 2);
	$time = $html_arr[0];
	$html = strstr($html, "\n");
	$html = ltrim($html, "\n");

	if ($html){
		$Parsedown = new Parsedown();
		echo "标题: ".$title."<br>"."日期: ".$time."<br><br>";
		echo $Parsedown->text($html);
	}else{
		echo notfoundfile();
	}
}else{
	echo notfoundfile();
}

include ($data_folder.'/comments.html');

echo $post_end;

include($theme_folder.'/footer.php');
echo $html_end;

?>