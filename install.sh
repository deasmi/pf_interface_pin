#!/bin/bash

ip=$1

ssh root@$ip /etc/rc.conf_mount_rw
ssh root@$ip mkdir -p /usr/local/etc/devd
scp carp.conf root@$ip:/usr/local/etc/devd/
scp wan_* root@$ip:/usr/local/bin
ssh root@$ip /etc/rc.conf_mount_ro

