<div align="center">
![alt text](https://github.com/root-tanishq/autorev.sh/raw/main/images/autorev_banner.png) 

# Autorev.sh

The Python Script will generate a (.) extension file with reverse shell codes then you can execute the script on the target [support windows and linux both]

# Usage

## Generating linux

```
python3 <path to autorev>/autorev.py -i 192.168.1.1 -p 443 -s 8000
```

![alt text](https://github.com/root-tanishq/autorev.sh/raw/main/images/autorev_lin.png)  

## Generating Windows bat

```
python3 <path to autorev>/autorev.py -i 192.168.1.1 -p 443 -s 8000 -f winc
```

![alt text](https://github.com/root-tanishq/autorev.sh/raw/main/images/autorev_winc.png)  

## Generating Windows ps1

```
python3 <path to autorev>/autorev.py -i 192.168.1.1 -p 443 -s 8000 -f winp
```

![alt text](https://github.com/root-tanishq/autorev.sh/raw/main/images/autorev_winp.png)

### Generating SCF

```
python3 autorev.sh -i <your-ip> -p <your-port> -o <scf-file-name> -f scf
```

![alt text](https://github.com/root-tanishq/autorev.sh/raw/main/images/autorev_scf.png) 

> All Usage commands will be also generated and print according to the given switches

## HELP Menu

```
-h,        --help   HELP   show this help message and exit
-i IPADDR, --ipaddr IPADDR LHOST Attacker IP address
-p PORT,   --port   PORT   LPORT Port to get reverse shell on [Default 9001]
-o OUT,    --out    OUT    Output File Name [Excluding (.)extension Extension][OPTIONAL]
-f FORMAT, --format FORMAT Define Format for generator [lin | win[c/p](c = cmd | p = powershell) | scf][Default=lin]
-s SERVER, --server SERVER Port to use for generating commands (http://[your-ip]:[PORT]) (Default 80)
```
