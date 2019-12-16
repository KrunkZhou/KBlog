欢迎 Welcome
2019/12/15 20:00

<br>

#<center>这就是 KBlog ！</center>

<br>

<center>KBlog 是一个无需数据库并且程序大小不到 100kb 的超轻量级基于 PHP 的开源博客，所有文章均以 Markdown 格式编写</center>

<br><br><br>

##准备工作

**从 GitHub 下载：** [Download](https://github.com/KrunkZhou/KBlog)

<br>

下载后将文件上传到服务器并访问您的域名或 IP 即可访问

开发环境: PHP7.2 Apache2.4 ( Synology WebStation )

<br><br>

##开始使用

####修改主页内容

前往 `blog` 文件夹找到 `index.md` 使用文本编辑器以 Markdown 格式来修改此文件内容 [点击下载](blog/index.md)

####新建文章

前往 `blog` 文件夹新建一个 `__.md` 文件，就可以开始编写文章啦！

<br>

让我来举个栗子 `hello_world.md` [点击访问](view.php?post=hello_world) [点击下载](blog/hello_world.md)：



```
你好世界 Hello World
2019/12/15 20:59
#Hello World
欢迎来到 KBlog 的世界 ！
这是你的第一篇文章，尝试编辑或修改我吧！
[KBlog GitHub](https://github.com/KrunkZhou/KBlog)
```



**第一行:** 标题

**第二行:** 时间 `yyyy/mm/dd hh:mm`

**第三行及以下:** Markdown 内容 [点击查看 MarkDown 范例](view.php?post=markdown)

<br>

---

##高级自定义

####自定义 meta 和标题

前往博客根目录找到 `config.php` 修改

```
$site_title='This is KBlog !'; //副标题
$site_title_sign=' | '; //分隔符
$theme_color='#000'; //浏览器颜色
$site_keywords='博客,博客程序,博客软件,krunk.cn'; //关键词
$site_description='KBlog是一个无需数据库并且程序大小不到100kb的超轻量级基于PHP的博客，所有文章均以 Markdown 格式编写'; //描述
```

####自定义 logo

前往 `data` 文件夹找到 `logo.png` 并替换

####自定义版权信息

前往博客根目录找到 `config.php` 修改

```
$site_footer='CopyRight &copy <a href="https://kblog.krunk.cn" style="text-decoration: none !important;">KBlog</a> 2019. All Right Reserved';
```

####自定义 JS 和 CSS

前往 `data` 文件夹找到 `style.js` 和 `style.css` 修改即可

####第三方评论代码

前往 `data` 文件夹找到 `comments.html` 放入评论代码

####编写自己的主题

复制 `/theme` 文件夹并重命名，您可随意修改主题的内容

修改完成后，前往博客根目录找到 `config.php` 修改 `$theme_folder='theme';` 中的主题文件夹名称到自己的主题文件夹 `$theme_folder='my_theme';`

####自定义 PHP 方法

前往 `data` 文件夹找到 `custom_function.php` 放入需要使用的代码，所有页面均会调用此文件

<br>

---

##开源协议

此项目代码采用 [MIT 许可证协议](LICENSE)
