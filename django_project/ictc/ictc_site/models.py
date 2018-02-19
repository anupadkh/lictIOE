from django.db import models

# Create your models here.
# Page
# Contact
# Address
# Content
# Iclass
# Menu
# Events
# Social
# Media

class Contact(models.Model):
	email = models.CharField('Email',max_length=60)
	phone = models.CharField('Phone',max_length=25)
	fname = models.CharField('Fname',max_length=15)
	mname = models.CharField('Mname',max_length=15,null=True)
	lname = models.CharField('Lname',max_length=15)
	def __str__(self):
		return self.fname + " "+ self.mname + " " + self.lname

class Address(models.Model):
	city = models.CharField('City',max_length=30)
	state = models.CharField('State',max_length=30, null=True)
	country = models.CharField('Country',max_length=30)
	zipcode = models.IntegerField('ZipCode',null=True)
	street = models.CharField('Street',max_length=30, null=True)
	adtype = models.IntegerField('AddressType',default=1)
	contact = models.ForeignKey(Contact, on_delete=models.CASCADE)


class Iclass(models.Model):
	name = models.CharField('Name',max_length=10)
	description = models.CharField('Content',max_length=30)
	def __str__(self):
		return self.description

class Content(models.Model):
	href = models.CharField('URL',max_length=50,default='#')
	title = models.CharField('Title',max_length=300)
	description = models.TextField('Content',null=True)
	iclass = models.ForeignKey(Iclass, on_delete=models.CASCADE)
	pub_date = models.DateTimeField('Published_Date',auto_now_add=True)
	def __str__(self):
		return self.title

class Page(models.Model):
	intro = models.ForeignKey(Content, on_delete=models.CASCADE, related_name='intro_content')
	contact = models.ForeignKey(Contact, on_delete=models.CASCADE, related_name='main_content')
	about = models.ForeignKey(Content,on_delete=models.CASCADE)

class Menu(models.Model):
	href = models.CharField('URL',max_length=30)
	title = models.CharField('Title',max_length=50)
	def __str__(self):
		return self.title

class Events(models.Model):
	href = models.CharField('URL',max_length=30)
	description = models.ForeignKey(Content, on_delete=models.CASCADE)
	start_date = models.DateTimeField('Start')
	end_date = models.DateTimeField('End')
	def __str__(self):
		return self.description


class Media(models.Model):
	name = models.CharField('Medianame',max_length=30)
	url = models.CharField('URL',max_length=40)
	fa = models.CharField('FAclass',max_length=30)
	def __str__(self):
		return self.name

class Social(models.Model):
	link = models.CharField('URLusername',max_length=30)
	stype = models.ForeignKey(Media,on_delete=models.CASCADE)
	contact = models.ForeignKey(Contact,on_delete=models.CASCADE)
	def __str__(self):
		return (Contact.objects.get(id=self.contact)).__str__

class Copyright(models.Model):
	crendentials = models.CharField('crendentials',max_length=40)
	url = models.CharField('URL',max_length=40)
	title = models.CharField('Title',max_length=50)
	def __str__(self):
		return self.title

# class Meta(models.Model):
# 	table = models.CharField(max_length=10)
# 	description = models.TextField(null=True)
# 	table_entry = models.IntegerField(default=0)
