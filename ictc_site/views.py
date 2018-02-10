from django.shortcuts import render
from django.http import HttpResponse


def index(request):
    return render(request, 'index.html')

def blog(request):
    items = ['item1', 'item2', 'item3','item4']
    context = {
        'items': items
    }
    return render(request, 'blog.html', context)