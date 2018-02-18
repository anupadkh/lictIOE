from django.urls import path
from django.conf.urls import include
from . import views

urlpatterns = [
    path('', views.index, name='index'),    
    path('blog/', views.blog, name='blog'),
    path('gallery/', views.gallery, name='gallery'),
    path('events/', views.events, name='events'),
    path('reservations/', views.reservations, name='reservations'),
    path('contact/', views.contact, name='contact'),
    
]