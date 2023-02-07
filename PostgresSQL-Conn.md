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
打开终端：
/Library/PostgreSQL/14/scripts/runpsql.sh；exit

1. On macOS

If you installed PostgreSQL via Homebrew:

To start manually:
```bash
pg_ctl -D /usr/local/var/postgres start
```
To stop manually:
```bash
pg_ctl -D /usr/local/var/postgres stop
```
To start PostgreSQL server now and relaunch at login:
```bash
brew services start postgresql
```
And stop PostgreSQL:
```bash
brew services stop postgresql
```

If you want a hassle-free way to manage the local PostgreSQL database servers, use DBngin. It’s just one click to start, another click to turn off. No dependencies, no command line required, multiple drivers, multiple versions and multiple ports. And it’s free.

REF：https://tableplus.com/blog/2018/10/how-to-start-stop-restart-postgresql-server.html