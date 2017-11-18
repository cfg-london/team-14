from django.shortcuts import render
from django.http import JsonResponse

from models import Prize

# Create your views here.
def getPrizes(request):
    year = request.GET.get('year')
    cat = request.GET.get('cat')
    ret = Prize.objects
    if year:
        ret = ret.filter(year=year)
    if cat:
        ret = ret.filter(category=cat)
    
    prizes = []
    for obj in ret:
        prizes.append({
            'year': obj.year,
            'category': obj.category,
            'motivation': obj.motivation,
        })
    
    return JsonResponse({'prizes': prizes})