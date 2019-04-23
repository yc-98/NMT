#!/bin/bash
/usr/sbin/tcpdump -ne -c 1000 -i wlp1s0 > packets.txt
grep -w "ARP" packets.txt > arp.txt
grep -w "UDP" packets.txt > udp.txt
grep -i "tcp" packets.txt > tcp.txt

cut -d " " -f 1 arp.txt > arptime.txt
cut -d " " -f 2 arp.txt > arpsmac.txt
cut -d " " -f 4 arp.txt > arpdmac1.txt
cut -d "," -f 1 arpdmac1.txt > arpdmac.txt
cut -d " " -f 11 arp.txt > arpsip.txt
cut -d " " -f 13 arp.txt > arpdip1.txt
cut -d "," -f 1 arpdip1.txt > arpdip.txt
cut -d " " -f 15 arp.txt > arplen.txt
sort arpsip.txt>arptop1.txt
uniq -c arptop1.txt>arptop2.txt
grep -v "is-at" arptop2.txt>arptop3.txt
sort -k 1nr arptop3.txt>arptop.txt



cut -d " " -f 1 udp.txt > udptime.txt
cut -d " " -f 2 udp.txt > udpsmac.txt
cut -d " " -f 4 udp.txt > udpdmac1.txt
cut -d "," -f 1 udpdmac1.txt > udpdmac.txt
cut -d " " -f 10 udp.txt > udpsip1.txt
cut -d "." -f 1-4 udpsip1.txt > udpsip.txt
cut -d "." -f 5 udpsip1.txt > udpsport.txt
cut -d " " -f 12 udp.txt > udpdip1.txt
cut -d "." -f 1-4 udpdip1.txt > udpdip.txt
cut -d "." -f 5 udpdip1.txt > udpdport1.txt
cut -d ":" -f 1 udpdport1.txt > udpdport.txt
cut -d " " -f 15 udp.txt > udplen.txt
sort udpsip.txt>udptop1.txt
uniq -c udptop1.txt>udptop2.txt
sort -k 1nr udptop2.txt>udptop.txt


cut -d " " -f 1 tcp.txt > tcptime.txt
cut -d " " -f 2 tcp.txt > tcpsmac.txt
cut -d " " -f 4 tcp.txt > tcpdmac1.txt
cut -d "," -f 1 tcpdmac1.txt > tcpdmac.txt
cut -d " " -f 10 tcp.txt > tcpsip1.txt
cut -d "." -f 1-4 tcpsip1.txt >tcpsip.txt
cut -d "." -f 5 tcpsip1.txt > tcpsport.txt
cut -d " " -f 12 tcp.txt > tcpdip1.txt
cut -d "." -f 1-4 tcpdip1.txt > tcpdip.txt
cut -d "." -f 5 tcpdip1.txt > tcpdport1.txt
cut -d ":" -f 1 tcpdport1.txt > tcpdport.txt
cut -d " " -f 9 tcp.txt > tcplen1.txt
cut -d ":" -f 1 tcplen1.txt > tcplen.txt
sort tcpsip.txt>tcptop1.txt
uniq -c tcptop1.txt>tcptop2.txt
sort -k 1nr tcptop2.txt>tcptop.txt

