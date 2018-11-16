[horizon文档地址](https://laravel.com/docs/5.7/horizon)

## 安装

```bash
composer require laravel/horizon
php artisan horizon:install
```

## 配置
配置文件地址 `config/horizon.php`

## 启动horizon

```bash
php artisan horizon

php artisan horizon:pause

php artisan horizon:continue

php artisan horizon:terminate
```

## 部署horizon
使用supervisor部署

```config
[program:horizon]
process_name=%(program_name)s
command=php /home/forge/app.com/artisan horizon
autostart=true
autorestart=true
user=forge
redirect_stderr=true
stdout_logfile=/home/forge/app.com/horizon.log
```