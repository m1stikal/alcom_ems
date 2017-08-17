# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.shortcuts import render

from django.http import HttpResponse
from django.template.loader import get_template
#from django.template import Context


def hello(request):
    name = "Mike"
    html = "<html><body>Hi %s. this seems to have worked!</body></html>" % name
    return HttpResponse(html)

def login(request):
    t = get_template('winems/WinEMS/login.htm')
    html = t.render()
    return HttpResponse(html)


# Create your views here.
