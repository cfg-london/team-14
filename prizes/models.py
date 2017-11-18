from __future__ import unicode_literals

from django.db import models

from laureates.models import Laureate

# Create your models here.
class Prize(models.Model):
	year = models.IntegerField(blank=False, null=False)
	category = models.CharField(blank=False, null=False, max_length=10)
	motivation = models.CharField(blank=True, null=True, max_length=256)
	
	def __str__(self):
		return '{0!s} - {1!s}'.format(self.year, self.category)

class PrizeAward(models.Model):
	prize = models.ForeignKey('Prize')
	laureate = models.ForeignKey(Laureate, null=True)
	motivation = models.CharField(blank=True, null=True, max_length=256)
	
	def __str__(self):
		return '{0!s} / {1!s}'.format(self.prize, self.laureate)