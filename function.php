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

include('config.php');
include('Parsedown.php');
include($data_folder.'/custom_function.php');

$html_start="<html>";
$html_end="</html>";
$post_start="<div class='post'>";
$post_end="</div>";
$postCard_start="<div class='postCardDiv'>";

function notfoundfile(){
	global $theme_folder;
	$html = @file_get_contents($theme_folder.'/notfound.md');
	$Parsedown = new Parsedown();
	return $Parsedown->text($html);
}

function get_File_Id(){
	global $blog_folder;
	$fileList=glob($blog_folder."/*.md");
	$mdList=array();
	foreach ($fileList as $type) {
		$t=substr($type,0,strpos($type,"."));
		array_push($mdList, substr($t,strlen($blog_folder)+1,strpos($type,".")));
	}
	return($mdList);
}

function get_post_title($id){
	global $blog_folder;
	$html = @file_get_contents($blog_folder.'/'.$id.'.md');
	$html_arr = explode("\n", $html, 2);
	$title = $html_arr[0];
	return $title;
}

function get_post_date($id){
	global $blog_folder;
	$html = @file_get_contents($blog_folder.'/'.$id.'.md');
	$html_arr = explode("\n", $html, 2);
	$title = $html_arr[0];
	$html = strstr($html, "\n");
	$html = ltrim($html, "\n");
	$html_arr = explode("\n", $html, 2);
	$time = $html_arr[0];
	return $time;
}

function cmp($a,$b){
	return strcmp(get_post_date($b),get_post_date($a));
}

function get_orgnized_file_id(){
	$id_array=get_File_Id();
	//var_dump($id_array) ;
	$new_array=$id_array;
	usort($new_array, "cmp");
	//var_dump($new_array) ;
	return $new_array;
}

function nav_active($id){
	return '<script>document.getElementById("'.$id.'").classList.add("active");</script>';
}

function cleanInput($input) {
	$search = array(
	'@<script[^>]*?>.*?</script>@si',   // javascript
	'@<[\/\!]*?[^<>]*?>@si',            // HTML tags
	'@<style[^>]*?>.*?</style>@siU',    // style tags
	'@<![\s\S]*?--[ \t\n\r]*>@'         // multi-line
	);
	$output = preg_replace($search, '', $input);
	return $output;
}

?>