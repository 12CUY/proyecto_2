import socket

def powerON():
    controller = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    controller.connect(('192.168.100.12',55443))
    msgON =b'{"id":1 ",method":"set_power", "params":["on"]}\r\n'
    controller.send(msgON)
    controller.close()
    
def powerOFF():
    controller = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    controller.connect(('192.168.100.12',55443))
    msgOFF =b'{"id":1 ",method":"set_power", "params":["off"]}\r\n'
    controller.send(msgOFF)
    controller.close()
    
while True:
    print("\Opciones: ")
    print("encender bombilla: 1")
    print("apagarbombilla: 2")
    option = str(input("que quieres hacer"))
    
    if option == "1":
        powerON()
        
    elif option == "2":
        powerOFF()