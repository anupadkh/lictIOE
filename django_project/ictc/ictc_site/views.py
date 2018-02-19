from django.http import HttpResponse
from django.template import loader

from .models import *

# def index(request):
#     return HttpResponse("Hello, world. You're at the polls index.")

def index(request):
    my_contents = Content.objects.order_by('-id')[:5]
    template = loader.get_template('index.html')
    context = {
        'page_content': my_contents,
    }
    return HttpResponse(template.render(context, request))