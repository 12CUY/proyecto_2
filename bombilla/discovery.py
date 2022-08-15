import socket

MCAST_GRP ='239.255.255.250'
MCAST_PORT = 1982
MSEARCH_MSG = ('M-SEARCH * HTTP/1.1\r\n' +
                'HOST: 239.255.255.250:1982\r\n' +
                'MAN: "ssdp:discover"\r\n' +
                'ST: wifi_bulb"\r\n')
