from __future__ import unicode_literals

from django.db import models

# Create your models here.

class Laureate(models.Model):
	textField = models.TextField(blank=False, null=False)

	def __str__(self):
		return '{0!s}'.format(self.textField)
