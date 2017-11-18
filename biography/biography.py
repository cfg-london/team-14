import urllib.request
import ssl

x = urllib.request.urlopen('https://www.nobelprize.org/nobel_prizes/peace/laureates/1964/king-facts.html', context=ssl.SSLContext())
print(x.read())
