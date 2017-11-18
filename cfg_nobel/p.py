import requests

from prizes.models import Prize, PrizeAward
from laureates.models import Laureate

def populate():
	r = requests.get(get_url_year(2000))
	prizes = r.json()['prizes']
	for p in prizes:
		npr = Prize()
		npr.year = p['year']
		npr.category = p['category']
		if p.get('overallMotivation'):
			npr.motivation = p['overallMotivation']
		npr.save()
		
		for l in p['laureates']:
			id = l['id']
			la_obj = createLaureate(id)
			pa = PrizeAward()
			pa.laureate = la_obj
			pa.prize = npr
			pa.motivation = l.get("motivation")
			pa.save()
			
def createLaureate(id):
	r = requests.get(get_url_id(id))
	i = r.json()['laureates'][0]
	laur = Laureate()
	laur.firstname = i.get("firstname")
	laur.surname = i.get("surname")
	laur.gender = i.get("gender")
	laur.bornCity = i.get("bornCity")
	laur.bornCountryCode = i.get("bornCountryCode")
	laur.bornCountry = i.get("bornCountry")
	laur.born = i.get("born")
	if not i.get("died") == "0000-00-00":
		laur.died = i.get("died")
	laur.save()
	return laur
	
def get_url_year(year):
	return "http://api.nobelprize.org/v1/prize.json?year={0!s}&yearTo={0!s}".format(year)
	
def get_url_id(id):
	return "http://api.nobelprize.org/v1/laureate.json?id={0!s}".format(id)