# 更新日志

## [1.0.0] - 2025-05-08
### 新增

* 使用Dynamic DNS服务，通过域名访问
* 通过Let's Encrypt申请到SSL证书，支持HTTPS访问

## [0.5.0] - 2025-05-05
### 新增

* 新增了wikijs服务，提供文档管理功能
* 新增了Nginx的反向代理配置，支持通过子域名访问wikijs
* 新增wikijs的数据库配置

### 变更
* 修改了nextcloud的用户设置，将wikijs的文件挂载到nextcloud的data目录下

## [0.4.0] - 2025-05-04

### 新增

* 将code-server的操作路径挂载到Nextcloud的data目录下，便于代码下载
* 新增了容器管理工具portainer

### 变更

* 修改了nextcloud的工作路径为`/nextcloud/`，统一通过主机名访问
* 为code-server在nextcloud下新建了一个用户，用于代码管理

### 修复

* 修复了`/nextcloud/`无法获取页面css等资源文件的情况
* 修复了防火墙问题，外部主机可以访问所有服务

## [0.3.0] - 2025-05-03

### 新增

* 新增MariaDB数据库服务，为Nextcloud提供数据存储
* Nextcloud连接至数据库，安装并配置Nextcloud

## [0.2.1] - 2025-05-02

### 新增

* 为Nginx的code-server新增WebSocket支持，解决code-server无法实时更新的问题

### 修复

* 修复了Nginx主机名解析问题，确保可以通过域名访问
* 修复了localhost/code/下无法重定向到登录页面问题
* 修复了code-server无法创建新文件夹的权限问题

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
