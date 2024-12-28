# Redis

## Configure overcommit on host

For Linux kernel set [overcommit memory](https://redis.io/docs/manual/admin/#linux) setting to 1.

As sudo/root user:
```shell
echo "vm.overcommit_memory = 1" >> /etc/sysctl.conf
```

Activate setting

```shell
sysctl vm.overcommit_memory=1
```