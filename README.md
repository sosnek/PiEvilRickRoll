Create a fake wifi access point that rick rolls people when they attempt to join!

Tested on a raspberry pi 3b+

```
sudo apt-get update
sudo apt-get install -y git php dnsmasq dnsmasq-base macchanger hostapd
git clone https://github.com/sosnek/PiEvilRickRoll.git
cd PiEvilTwin
chmod +x install.sh
sudo ./install.sh
sudo reboot
```
After the reboot, wait 30 seconds and then look for the access point

Connecting to it from an Apple, Android or Windows device should automatically bring up a captive portal login screen.

visitors are logged in `/var/www/html/visitors.txt`.
