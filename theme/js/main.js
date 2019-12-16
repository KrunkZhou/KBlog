/**
 * Krunk.cn KBlog - 极简博客
 *
 * Project Link: https://kblog.krunk.cn
 * GitHub: https://github.com/KrunkZhou/KBlog
 * 
 * @author     Krunk Zhou
 * @copyright  2019 Krunk Zhou (https://krunk.cn)
 */

//Title
var OriginTitile = document.title;
var titleTime;
document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
        document.title = '记得常回来看看啊! '+ OriginTitile;
        clearTimeout(titleTime);
    } else {
        document.title = '欢迎回来! '+ OriginTitile;
        titleTime = setTimeout(function() {
            document.title = OriginTitile;
        }, 1000);
    }
});

//Log
console.log('\n' + ' %c  KBlog 博客'  + ' ' + ' %c https://kblog.krunk.cn ' + '\n' , 'color: #fadfa3; background: #030307; padding:5px 0;', 'background: #fadfa3; padding:5px 0;');
