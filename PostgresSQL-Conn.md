# Php Connect PostgresSQL

- PostgreSQL安装目录
- ```bash
  /Library/PostgreSQL/14
  ```

- PostgreSQL安装目录中找到pg_hba.conf文件，修改为如下内容：

```bash
# IPv4 local connections:
host    all         all         127.0.0.1/32          md5
```

- 重启PostgreSQL服务

```bash
[root@host]# service postgresql restart
Stopping postgresql service:                               [  OK  ]
Starting postgresql service:                               [  OK  ]
```

- 查看 PostgreSQL 端口号

```bash
netstat -a | grep PGSQL
```