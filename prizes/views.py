from django.shortcuts import render
from django.http import JsonResponse

from prizes.models import Prize, PrizeAward

# Create your views here.
def getPrizes(request):
    id = request.GET.get('id')
    year = request.GET.get('year')
    cat = request.GET.get('cat')
    ret = Prize.objects
    if id:
        ret = ret.filter(id=id)
    if year:
        ret = ret.filter(year=year)
    if cat:
        ret = ret.filter(category=cat)
    
    prizes = []
    for obj in ret:
        prizes.append({
            'id': obj.id,
            'year': obj.year,
            'category': obj.category,
            'motivation': obj.motivation,
        })
    
    return JsonResponse({'prizes': prizes})
    
def getPrizeAwards(request):
    laureate = request.GET.get('laureate')
    prize = request.GET.get('prize')
    ret = PrizeAward.objects
    if laureate:
        ret = ret.filter(laureate=laureate)
    if prize:
        ret = ret.filter(prize=prize)
    
    prize_awards = []
    for obj in ret:
        prize_awards.append({
            'id': obj.id,
            'prize': obj.prize.id,
            'laureate': obj.laureate.id,
            'motivation': obj.motivation,
        })
    
    return JsonResponse({'prize_awards': prize_awards})