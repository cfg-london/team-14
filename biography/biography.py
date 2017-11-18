import urllib.request
import ssl
import re

response = urllib.request.urlopen('https://www.nobelprize.org/nobel_prizes/peace/laureates/1964/king-facts.html', context=ssl.SSLContext())

content = response.read().decode('utf-8')
pattern1 = r"<p>\s*<strong>\s*Prize share:\s*</strong>\s*.*\s*</p>\s*</div>\s*</div>\s*</div>\s*<div style=\"clear:both;\"></div>\s*"
content1 = re.split(pattern1, content)[1]
print(content)
