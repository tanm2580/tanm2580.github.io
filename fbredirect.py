Link=str(input("Link="))
Link1=Link.replace(":", "%3A")
Link0=Link1.replace("/", "%2F")
LS1= "https://l.facebook.com/l.php?u="
LS2="&h="
A= "%3A"
B= "%2F"

###### for token
import urllib.request
url= "https://tanm2580.github.io/Token.txt"
file= urllib.request.urlopen(url)

for line in file:
	Token = line.decode("utf-8").strip()
######



X= (LS1+Link0+LS2+Token)
Y= (LS1+"http"+A+B+B+"www."+Link0+LS2+Token)



###### if
try : 

    res = Link.index(":")

    print (X)

except :

    print (Y)
######
