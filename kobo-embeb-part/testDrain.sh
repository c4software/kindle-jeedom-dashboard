killall -TERM nickel hindenburg sickel fickel

while true
do
  sh wifiup.sh
  sleep 10
  wget -O /tmp/display.png http://192.168.1.32/kindle/
  fbink -g file=/tmp/display.png
  fbink -pmM -y -8 "B. `cat /sys/class/power_supply/mc13892_bat/capacity`%"
  sh wifidown.sh
  sleep 1800
done