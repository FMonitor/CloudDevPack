# Web 开发环境集成平台（基于 Docker 构建）

这是一个通过 Docker 构建的个人全栈开发环境，支持远程访问、安全加密、模块化管理，适用于开发、学习与部署测试。平台集成了 VSCode 在线编辑器、私有云盘、容器可视化管理、资源监控与文档平台。

---

## 🔧 已集成组件

| 组件              | 描述                            |
| --------------- | ----------------------------- |
| **Nginx**       | 统一入口，反向代理和 HTTPS 加密           |
| **code-server** | 基于浏览器的 VSCode 在线开发环境          |
| **Nextcloud**   | 私有云盘，支持同步、分享与备份               |
| **Portainer**   | Docker 可视化管理界面                |
| **Wiki.js**     | 文档管理系统，支持 Markdown 与权限控制      |
| **MariaDB**     | 关系型数据库，支撑 Nextcloud 与 Wiki.js |
| **Netdata**     | 实时系统性能监控                      |

---

## 🧑‍💻 系统架构

```
主机：Windows 
├── WSL2: Ubuntu 
　　└── Docker Engine  
　　　　├── nginx          # 网关 + 反代 + SSL  
　　　　├── code-server    # 在线开发环境  
　　　　├── nextcloud      # 私有云盘  
　　　　├── portainer      # 容器可视化  
　　　　├── wikijs         # 知识管理平台  
　　　　├── mariadb        # 数据库  
　　　　└── netdata        # 性能监控  
```

---

## 🚀 快速启动

### 1. 克隆项目

```bash
git clone https://github.com/yourusername/web-dev-platform.git
cd web-dev-platform
```

### 2. 可选配置：编辑 `.env` 文件，自定义端口与域名

### 3. 启动服务

```bash
docker compose up -d
```

### 4. 项目演示地址（服务配置中，暂不可访问）

| 服务          | 示例地址                                                                             |
| ----------- | -------------------------------------------------------------------------------- |
| 导航页         | [https://lcmonitor.dynv6.net](https://lcmonitor.dynv6.net)                       |
| Wiki.js     | [https://wiki.lcmonitor.dynv6.net](https://wiki.lcmonitor.dynv6.net)             |

---


## 📂 文件系统设置

已预配置以下用户和文件绑定：

* `code-server` 设置了定向指定目录的账户，便于文件管理
* `Wiki.js` 文件和数据库配置已按需完成

其他Nextcloud用户账户由使用者根据需求自行创建和配置

---

## 🛠 技术栈与工具

* Docker + Docker Compose
* Nginx + Let’s Encrypt
* Nextcloud + PHP-FPM
* code-server (VSCode Web)
* MariaDB / Wiki.js
* Portainer / Netdata
* DNS: dynv6 + DNS-01 验证方式

---

## 📌 TODO 计划

* [ ] 完善权限配置，确保外部访问安全
* [ ] 添加自动镜像构建与部署脚本
* [ ] 支持一键部署到 Azure 平台
* [ ] 容器重构，模块可选构建
* [ ] 自动定期备份配置与数据
* [ ] 整合 Grafana + Prometheus（替代或辅助 Netdata）
