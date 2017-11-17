import requests

from prizes.models import Prize

def populate_prizes():
    r = requests.get(get_url_year(2000))
    prizes = r.json()['prizes']
    for p in prizes:
        npr = Prize()
        npr.year = p['year']
        npr.category = p['category']
    
def get_url_year(year):
    return "http://api.nobelprize.org/v1/prize.json?year={0!s}&yearTo={0!s}".format(year)