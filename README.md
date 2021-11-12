# autorev.sh  
The Pythone Script will generate a (.)extensino file with reverse shell codes then you can execute the script on the target [support windows and linux both]
## Generating linux  
```
python3 autorev.py -i <your-ip> -p <your-port> -o <sh-file-name> -f lin
```
## Generating Windows
```
python3 autorev.sh -i <your-ip> -p <your-port> -o <batch-file-name> -f win
```
### Generating scf
```
python3 autorev.sh -i <your-ip> -p <your-port> -o <scf-file-name> -f scf
```
All Usage commands will be also generated and print according to the given switches
### Suggested shell handler - [penelope](https://github.com/brightio/penelope) [Only for linux]
