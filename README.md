**# Web 开发环境集成平台（基于 Docker 构建）**

本项目旨在通过 Docker 搭建一个多功能的个人开发平台，集成了在线代码编辑器、私有网盘、文档管理、反向代理、系统监控等工具，适合用于学习、开发和运维实践。

**## 📦 集成组件**

| 组件              | 功能简介                |
| --------------- | ------------------- |
| **Nginx**       | 统一反向代理与 HTTPS 网关    |
| **MariaDB**     | 数据库服务               |
| **code-server** | 基于 Web 的 VSCode 编辑器 |
| **Nextcloud**   | 私有网盘、文件同步与共享平台      |
| **Wiki.js**     | 文档管理与知识库系统          |
| **Netdata**     | 实时系统监控与资源可视化界面      |

---

**## 🧱 系统架构**

### 后台服务

* **Nginx**：统一入口与 HTTPS 支持
* **MariaDB**：数据库服务
* **Docker Engine**：容器管理运行平台
* **Netdata**：系统监控与展示平台

### 前台服务

* **code-server**：在线开发环境
* **Nextcloud**：文件管理与挂载目标
* **Wiki.js**：知识库系统，集成导航主页

系统部署环境为：

* Windows 11 + WSL2 (Ubuntu 24.04)

---

**## 🚀 快速启动**

1. 克隆本项目

```bash
git clone https://github.com/FMonitor/CloudDevPack.git
cd CloudDevPack
```

2. 编辑 `.env` 文件配置端口与域名（可选）

3. 启动服务（确保已安装 Docker 与 Docker Compose）

```bash
docker compose up -d
```

4. 打开浏览器访问：

| 服务          | 默认地址                                                                             |
| ----------- | -------------------------------------------------------------------------------- |
| 导航页         | [https://lcmonitor.dynv6.net/](https://lcmonitor.dynv6.net/)                     |
| code-server | [https://lcmonitor.dynv6.net/code/](https://lcmonitor.dynv6.net/code/)           |
| Nextcloud   | [https://lcmonitor.dynv6.net/nextcloud/](https://lcmonitor.dynv6.net/nextcloud/) |
| Wiki.js     | [https://wiki.lcmonitor.dynv6.net/](https://wiki.lcmonitor.dynv6.net/)           |
| Netdata     | [https://lcmonitor.dynv6.net/netdata](https://lcmonitor.dynv6.net/netdata)       |

---

**## 🔐 SSL 配置说明**

Nginx 容器负责为所有服务配置反向代理与 HTTPS 支持，默认支持自签名证书，建议通过 Let’s Encrypt + DNS 验证申请正式证书。

---

**## 📁 文件挂载说明**

* code-server 与 Wiki.js 的数据目录均已挂载至 Nextcloud 的用户目录下，便于文件管理与统一备份
* 所有服务目录权限已设置为 UID/GID 1000，确保容器内部与 Nextcloud 均可读写
* Netdata 的配置与缓存目录挂载至项目目录，便于统一管理与快速部署

---

**## 🛠 技术栈与工具**

* Linux / Ubuntu / WSL2
* Docker & Docker Compose
* Nginx + SSL (Let's Encrypt)
* Nextcloud + MariaDB
* code-server (VSCode in browser)
* Wiki.js
* Netdata

---

**## ✅ 已完成特性**

* [x] 集成多服务容器架构
* [x] 自定义反向代理路径（如 /code/ /wiki/）
* [x] 挂载文件至 Nextcloud 统一目录
* [x] 配置 DNS 验证的 HTTPS 证书
* [x] 支持 Wiki.js 导出备份
* [x] 修复跨服务权限写入问题
* [x] 替换 Portainer，使用 Netdata 支持访客可访问

---

**## 📌 TODO**

* [ ] 测试容器镜像的完整性与重部署可用性
* [ ] 设计 Azure 等平台的部署方案
* [ ] 后续根据需要扩展其他模块（如 CI/CD）

---

欢迎关注本项目的持续更新与优化实践！
