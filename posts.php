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
$site_title_before='Posts';
include($theme_folder.'/header.php');
echo nav_active("posts");

echo $postCard_start;

//var_dump(get_orgnized_file_id());

//$id="hello_world";

$id_array=get_orgnized_file_id();
//var_dump($id_array);

foreach ($id_array as $id){

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

		echo "<a href='view.php?post=".$id."' style='text-decoration: none !important;'><div class='postCard'><center><span style='font-size:25px;'>".$title."</span><span style='font-size:12px;color:rgb(190,190,190);'><br>".$time."</span></center></div></a><br>";
	}

}

echo $post_end;

include($theme_folder.'/footer.php');
echo $html_end;

?>