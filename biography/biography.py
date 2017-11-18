import urllib.request
import ssl
import re

# Not checking server - must change this for production!
response = urllib.request.urlopen('https://www.nobelprize.org/nobel_prizes/peace/laureates/1964/king-facts.html', context=ssl.SSLContext())

content = response.read().decode('utf-8')
beginPattern = r"<p>\s*<strong>\s*Prize share:\s*</strong>\s*.*\s*</p>\s*</div>\s*</div>\s*</div>\s*<div style=\"clear:both;\"></div>\s*"
endPattern = r"<div class=\"copy\">Copyright &copy;"
content1 = re.split(beginPattern, content)[1]
content2 = re.split(endPattern, content1)[0]
print(content2)
