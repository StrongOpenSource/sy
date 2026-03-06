任何使用问题，欢迎进入交流群提问 https://t.me/sycms2

1，关于安装
本程序无数据库，自动更新，不需要安装，解压后上传到网站目录即可运行。

2，管理后台
后台目录为/admin/，按提示操作即可。

3，网站程序各目录用途以及备份说明
/cache/，缓存数据目录
/data/，保存网站数据库的目录，会自动从API下载
/html/，网页HTML缓存目录
/tmp/，临时文件目录
上面这4个目录不需要备份，其余的所有文件和目录都需要备份！

4，重置密码
删除 /config/adm_config_password_hash.php 这个文件即可进入到重置密码的页面

5，重置限制访问后台的域名
删除 /config/cms_config_admin_domain.php 和 /config/@config.php

6, 如果打开网站后台出现空白页，尝试把php.ini里的内存限制(memory_limit)改为 256M 。需要重启PHP-FPM使用修改生效。