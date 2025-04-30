# Web 开发环境集成平台（基于 Docker 构建）

本项目旨在通过 Docker 搭建一个多功能的个人开发平台，集成了在线代码编辑器、私有网盘、反向代理、容器管理与系统监控等工具，适合用于学习、开发和运维实践。

## 📦 集成组件

| 组件         | 功能简介                     |
|--------------|------------------------------|
| **Nginx**     | 统一反向代理与 HTTPS 网关      |
| **code-server** | 基于 Web 的 VSCode 编辑器     |
| **Nextcloud**  | 私有网盘、文件同步与共享平台   |
| **Portainer**  | 可视化 Docker 容器管理界面     |
| **Netdata**    | 实时系统资源监控与图表展示     |

---

## 🧱 系统架构

```
Windows 11
└── WSL2 (Ubuntu 24.04)
    └── Docker Engine
        ├── nginx (反向代理与SSL)
        ├── code-server (开发环境)
        ├── nextcloud (私有云盘)
        ├── portainer (容器管理)
        └── netdata (资源监控)
```

---

## 🚀 快速启动

1. 克隆本项目

```bash
git clone https://github.com/yourusername/web-dev-platform.git
cd web-dev-platform
```

2. 编辑 `.env` 文件配置端口与域名（可选）

3. 启动服务（确保已安装 Docker 与 Docker Compose）

```bash
docker compose up -d
```

4. 打开浏览器访问：

| 服务         | 默认地址                |
|--------------|-------------------------|
| code-server  | https://your-domain:8443 |
| Nextcloud    | https://your-domain:8444 |
| Portainer    | https://your-domain:9000 |
| Netdata      | https://your-domain:19999 |

---

## 🔧 SSL 配置说明

Nginx 容器负责为所有服务配置反向代理与 HTTPS 支持，默认支持自签名证书，可手动替换为 Let’s Encrypt 等 CA 签发的证书。

---

## 🛠 技术栈与工具

- Linux / Ubuntu / WSL2
- Docker & Docker Compose
- Nginx + SSL
- Nextcloud + PHP-FPM
- code-server (VSCode in browser)
- Portainer / Netdata

---

## 📌 TODO 计划

- [ ] 使用自动脚本初始化 SSL 证书
- [ ] 加入 Watchtower 自动更新容器版本
- [ ] 进一步探索 Grafana + Prometheus 集成

