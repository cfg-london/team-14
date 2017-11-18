from django.shortcuts import render
from django.http import JsonResponse

from processQuery import processText

# Create your views here.
def processQuery(request):
    dict_obj = processText(request.GET.get('query'))
    return JsonResponse(dict_obj)