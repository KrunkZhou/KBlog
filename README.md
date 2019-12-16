<h1>这就是 KBlog 极简博客 !</h1>

KBlog 是一个无需数据库并且程序大小不到 100kb 的超轻量级基于 PHP 的开源博客，所有文章均以 Markdown 格式编写


## 准备工作

**从 GitHub 下载：** [Download](https://github.com/KrunkZhou/KBlog)


下载后将文件上传到服务器并访问您的域名或 IP 即可访问

开发环境: PHP7.2 Apache2.4 ( Synology WebStation )


## 开始使用

#### 修改主页内容

前往 `blog` 文件夹找到 `index.md` 使用文本编辑器以 Markdown 格式来修改此文件内容 [点击下载](https://kblog.krunk.cn/blog/index.md)

#### 新建文章

前往 `blog` 文件夹新建一个 `__.md` 文件，就可以开始编写文章啦！


让我来举个栗子 `hello_world.md` [点击访问](https://kblog.krunk.cn/view.php?post=hello_world) [点击下载](https://kblog.krunk.cn/blog/hello_world.md)：

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

**第三行及以下:** Markdown 内容 [点击查看 MarkDown 范例](https://kblog.krunk.cn/view.php?post=markdown)

---

##开发文档

访问 KBlog 开发文档了解更多: [https://kblog.krunk.cn/](https://kblog.krunk.cn/)

---

## 开源协议

此项目代码采用 [MIT 许可证协议](https://kblog.krunk.cn/LICENSE.txt)
