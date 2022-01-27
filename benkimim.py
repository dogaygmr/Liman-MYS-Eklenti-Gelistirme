#usr/bin/python3
import os

name=os.popen('echo"$USER"').read()
print(name)
