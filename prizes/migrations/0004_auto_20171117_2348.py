# -*- coding: utf-8 -*-
# Generated by Django 1.9 on 2017-11-17 23:48
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('prizes', '0003_auto_20171117_2302'),
    ]

    operations = [
        migrations.AlterField(
            model_name='prize',
            name='motivation',
            field=models.TextField(blank=True, null=True),
        ),
    ]
