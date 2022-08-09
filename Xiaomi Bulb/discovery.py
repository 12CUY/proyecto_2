import socket

MCAST_GRP ='239.255.255.250'
MCAST_PORT = 1982
MSEARCH_MSG = ('M-SEARCH * HTTP/1.1\r\n' +
                'HOST: 239.255.255.250:1982\r\n' +
                'MAN: "ssdp:discover"\r\n' +
                'ST: wifi_bulb"\r\n')

timeout = 5
encotrado = True

socket.setdefaulttimeout(timeout)
#IPV4, UDP
s = socket.socket(socket.AF_INET, socket.SOCK_DGRAM, socket.IPPROTO_UDP)
s.bind(('', MCAST_PORT))
s.sendto(MSEARCH_MSG.encode(), (MCAST_GRP, MCAST_PORT))

while True:
    try:
        data, addr = s.recvfrom(43210)
        data = data.decode("uft-8")
        
        if data.find("yeelight") != -1:
            encotrado =True
            print("se encontro la bombilla Yeelight")
            print(data)
            break
        
    except:
        print("no se encontro ninguna bombilla Yeelight")
        break
    
    print("se termino el proceso")
    s.close()