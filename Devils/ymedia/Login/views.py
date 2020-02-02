from django.shortcuts import render


def Login(request):
    return render(request, 'login.html', locals())

def Register(request):
    return render(request, 'register.html', locals())