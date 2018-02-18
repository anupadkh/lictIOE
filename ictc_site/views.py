from django.shortcuts import render
from django.http import HttpResponse
import os

def index(request): 
    images_loc = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
    image_slides = ['static/img/slide_01.jpg', 'static/img/slide_02.jpg', 'static/img/slide_03.jpg']
    context = {
        'page_title': 'Information and Communication Technology Center | ITCT, IOE',
        'image_slides': image_slides,
    }
    return render(request, 'index.html',context)


def blog(request):
    items = ['item1', 'item2', 'item3','item4']
    context = {
        'items': items
    }
    return render(request, 'blog.html', context)

def gallery(request):    
    items = ['item1', 'item2', 'item3','item4']
    context = {
        'items': items,
        'page_title': 'ICTC Gallery'
    }
    return render(request, 'gallery.html', context)

def events(request):
    items = ['item1', 'item2', 'item3','item4']
    context = {
        'items': items
    }
    return render(request, 'events.html', context)

def reservations(request):
    items = ['item1', 'item2', 'item3','item4']
    context = {
        'items': items
    }
    return render(request, 'reservations.html', context)

def contact(request):
    items = ['item1', 'item2', 'item3','item4']
    context = {
        'items': items
    }
    return render(request, 'contact.html', context)