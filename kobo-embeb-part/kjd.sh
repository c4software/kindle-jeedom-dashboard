#!/bin/sh
killall -TERM nickel hindenburg sickel fickel

# Change CPU Scalling
echo powersave | tee /sys/devices/system/cpu/cpu0/cpufreq/scaling_governor

while true
do
  wget -O /tmp/display.png http://192.168.1.32/kindle/
  fbink -g file=/tmp/display.png
  sleep 600
  # sleep 1800
done
