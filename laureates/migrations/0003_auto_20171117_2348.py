# -*- coding: utf-8 -*-
# Generated by Django 1.9 on 2017-11-17 23:48
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('laureates', '0002_auto_20171117_2302'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='laureate',
            name='textField',
        ),
        migrations.AddField(
            model_name='laureate',
            name='born',
            field=models.DateField(blank=True, null=True),
        ),
        migrations.AddField(
            model_name='laureate',
            name='bornCity',
            field=models.TextField(blank=True, null=True),
        ),
        migrations.AddField(
            model_name='laureate',
            name='bornCountry',
            field=models.TextField(blank=True, null=True),
        ),
        migrations.AddField(
            model_name='laureate',
            name='bornCountryCode',
            field=models.TextField(blank=True, null=True),
        ),
        migrations.AddField(
            model_name='laureate',
            name='died',
            field=models.DateField(blank=True, null=True),
        ),
        migrations.AddField(
            model_name='laureate',
            name='firstname',
            field=models.TextField(blank=True, null=True),
        ),
        migrations.AddField(
            model_name='laureate',
            name='gender',
            field=models.TextField(blank=True, null=True),
        ),
        migrations.AddField(
            model_name='laureate',
            name='surname',
            field=models.TextField(blank=True, null=True),
        ),
    ]
