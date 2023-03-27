# PiEvilTwin Portable Access Point

# A fake credential harvesting rogue captive portal for Raspberry Pi ZeroW / 4 / 4B+

## Original Script of [NickJongens's PiEvilTwin](https://github.com/NickJongens/PiEvilTwin)

I do NOT take any responsibility for your actions while using any material provided from this repository.
Performing attacks on public users is illegal and should require permission from all users within the radius of the network.

Once you've done installing raspiOS into your rpi, reconnect using your password, install dependencies and run the install script:

```
sudo apt-get update
sudo apt-get install -y git php dnsmasq dnsmasq-base macchanger hostapd
git clone https://github.com/unrealistic-reality/PiEvilTwin
cd PiEvilTwin
chmod +x install.sh
sudo ./install.sh
sudo reboot
```
During installation, macchanger may ask whether or not MAC addresses should be changed automatically - choose "No". The startup script will perform this task more reliably.

If you receive a similar message with "Restart services during package upgrades without asking?" - choose "Yes".
This is required for cron to work.

After the reboot, wait 30 seconds and then look for an access point named "@FreeGoWiFi" 

Connecting to it from an Apple, Android or Windows device should automatically bring up a captive portal login screen.
The Windows captive portal is a bit harder to introduce properly. (BETA)
It requires a folder called 'redirect' with it's own 'index.html' file redirecting to the root website index.html

Credentials are logged in `/var/www/html/lOgZ/****-logs.txt`.
Website data will be able to be modified under `/var/www/html`

To use an external WiFi Adapter for better range, please change the
'wlan0' value in the following files:

```
hostapd.conf
PiEvilTwinStart.sh 
```

To:

Your WiFi adapter interface name e.g 'wlan1' without quotes before running the install script.

If you want to change the access point name, change the `ssid` parameter in `hostapd.conf` file.

I do NOT take any responsibility for your actions while using any material provided from this repository.
Performing attacks on public users is illegal and should require permission from all users within the radius of the network.
