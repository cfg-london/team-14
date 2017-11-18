from __future__ import unicode_literals

from django.db import models

# Create your models here.

class Laureate(models.Model):
	firstname = models.TextField(blank=True, null=True)
	surname = models.TextField(blank=True, null=True)
	gender = models.TextField(blank=True, null=True)
	bornCity = models.TextField(blank=True, null=True)
	bornCountryCode = models.TextField(blank=True, null=True)
	bornCountry = models.TextField(blank=True, null=True)
	born = models.DateField(blank=True, null=True)
	died = models.DateField(blank=True, null=True)

	def __str__(self):
		return '{0!s} {1!s}'.format(self.firstname, self.surname)
