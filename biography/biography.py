import urllib.request
import ssl
import re

# Not checking server - must change this for production!
response = urllib.request.urlopen('https://www.nobelprize.org/nobel_prizes/peace/laureates/1964/king-facts.html', context=ssl.SSLContext())
content = response.read().decode('utf-8')

beginPattern = r"<p>\s*<strong>\s*Prize share:\s*</strong>\s*.*\s*</p>\s*</div>\s*</div>\s*</div>\s*<div style=\"clear:both;\"></div>\s*"
content1 = re.split(beginPattern, content)[1]
endPattern = r"\s*<div class=\"copy\">Copyright &copy;"
content2 = re.split(endPattern, content1)[0]
content3 = re.sub(r"\t+", "", content2)

print(content3)
