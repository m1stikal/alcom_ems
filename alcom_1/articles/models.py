# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models

class Article(models.Model);:
        title = models.TextField(max_length=254)
        body = models.TextField()

# Create your models here.
