# 更新日志
## [1.0.2] - 2025-05-10

## 新增

* 新增了 Wiki.js 导出目录，将备份路径挂载至 Nextcloud 
* 新增 code-server 的默认工作目录 `/var/www`，并挂载至宿主机目录，解决扩展插件潜在路径依赖


### 修复

* 修复 Nextcloud config 目录无法写入的问题，通过设置目录权限恢复配置能力
* 修复 code-server 无法创建默认路径 `/var/www` 报错的问题，通过显式创建并挂载解决

### 优化

* 将 wikijs 备份文件和 code-server 挂载至 nextcloud 的 data 目录下，便于统一管理
* 清除 code-server 启动残留配置，避免无效路径反复尝试访问

## [1.0.1] - 2025-05-09
### 新增

* 通过 AAAA 记录绑定子域名 wiki.lcmonitor.dynv6.net，并成功签发 DNS 验证证书
* 完善 Nginx 配置，支持多子域名服务部署
* 统一主域名为服务导航入口页面，提升整体访问体验

### 修复

* 修复 wikijs 无法解析 CSS/JS 的路径问题

## [1.0.0] - 2025-05-08
### 新增

* 使用 Dynamic DNS 服务，实现通过域名访问
* 通过 Let's Encrypt 申请到主域名的 SSL 证书，支持 HTTPS 访问

### 修复

* 修复了 Nginx 的 SSL 证书配置问题，确保 HTTPS 访问正常
* 修复了资源获取不使用 HTTPS 的问题

## [0.5.0] - 2025-05-05
### 新增

* 新增了 wikijs 服务，提供文档管理功能
* 新增了 Nginx 的反向代理配置，支持通过子域名访问 wikijs

### 变更

* 修改nextcloud的用户设置，将wikijs的文件挂载到nextcloud的data目录下

## [0.4.0] - 2025-05-04

### 新增

* 新增了容器管理工具portainer

### 变更

* 修改了 nextcloud 的工作路径为`/nextcloud/`，统一通过主机名访问

### 修复

* 修复了`/nextcloud/`无法获取页面css等资源文件的情况
* 修复了防火墙问题，外部主机可以访问所有服务

## [0.3.0] - 2025-05-03

### 新增

* 新增 MariaDB 数据库服务，为 Nextcloud 提供数据存储
* Nextcloud 连接至数据库，安装并配置 Nextcloud

## [0.2.1] - 2025-05-02

### 新增

* 为 Nginx 的 code-server 新增 WebSocket 支持，解决code-server无法实时更新的问题

### 修复

* 修复了Nginx主机名解析问题，确保可以通过域名访问
* 修复了localhost/code/下无法重定向到登录页面问题

## [0.2.0] - 2025-05-01
### 新增

* 完成code-server的登录功能
* 将code-server的访问路径修改为`/code/`

### 变更

* 将code-server的操作路径挂载到项目目录下，方便代码管理
* 使用http访问时，Nginx自动重定向到https
* 修改WSL的网络模式为桥接模式，以便于外部网络访问

### 移除

* 移除了code-server的端口映射，改为通过Nginx反向代理访问

## [0.1.0] - 2025-04-30

### 新增

* 建立项目结构
* 构建初始Nginx反代服务，添加测试页面
* 配置Nginx使用的SSL证书
* 添加code-server、nextcloud镜像
* 添加docker-compose.yml文件，简化服务启动
