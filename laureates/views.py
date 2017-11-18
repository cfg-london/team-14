from django.shortcuts import render
from django.http import JsonResponse

from .models import Laureate

# Create your views here.
def getLaureate(request):
    id = request.GET.get('id')
    gender = request.GET.get('gender')
    bornCountryCode = request.GET.get('bornCountryCode')
    ret = Laureate.objects
    if id:
        ret = ret.filter(id=id)
    if gender:
        ret = ret.filter(gender=gender)
    if bornCountryCode:
        ret = ret.filter(bornCountryCode=bornCountryCode)
    
    laur = []
    for obj in ret:
        laur.append({
            'id': obj.id,
            'firstname': obj.firstname,
            'surname': obj.surname,
            'gender': obj.gender,
            'bornCity': obj.bornCity,
            'bornCountryCode': obj.bornCountryCode,
            'bornCountry': obj.bornCountry,
            'born': obj.born,
            'died': obj.died,
        })
    
    return JsonResponse({'laureates': laur})