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
$site_title_before='Home';
include($theme_folder.'/header.php');
echo nav_active("index");

echo $post_start;
$id=$index_file;
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
		echo $Parsedown->text($html);
	}else{
		echo notfoundfile();
	}
}else{
	echo notfoundfile();
}
echo $post_end;

include($theme_folder.'/footer.php');
echo $html_end;

?>