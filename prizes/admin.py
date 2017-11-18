from django.contrib import admin

from prizes.models import Prize, PrizeAward

# Register your models here.
admin.site.register(Prize)
admin.site.register(PrizeAward)