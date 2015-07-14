Interface Pin
=============

Introduction
------------

This is a set of simple scripts for installation onto a pfsense
cluster to make the WAN interface status follow that of a CARP
interface on the LAN side.

I use this as I have a single public IP address allocated via DHCP to
avoid both WAN interfaces continually sending DHCP packets.  I also
ensure both WAN interfaces share the same MAC address.  This obviously
requires a VLAN/switch with both WAN interfaces and the upstream
router connected to it.

*Note you MUST reinstall after an upgrade*

Installation Instructions
-------------------------

run  
`/etc/rc.conf_mount_rw`  
to enable write to file systems

Install carp.conf to /usr/local/etc/devd/
This directory will need
creating probably

Install both wan_up.sh and wan_down.sh into /usr/local/bin


`/etc/rc.conf_mount_ro`
to go back to r/o filesytem

Installation script
-------------------

Alternatively run
`install.sh <ip address>`
This works best if you already have your SSH public key installed onto
the firewall and have the key added to your ssh-agent
