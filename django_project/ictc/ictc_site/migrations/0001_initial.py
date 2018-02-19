# Generated by Django 2.0.2 on 2018-02-07 15:52

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Address',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('city', models.CharField(max_length=30, verbose_name='City')),
                ('state', models.CharField(max_length=30, null=True, verbose_name='State')),
                ('country', models.CharField(max_length=30, verbose_name='Country')),
                ('zipcode', models.IntegerField(null=True, verbose_name='ZipCode')),
                ('street', models.CharField(max_length=30, null=True, verbose_name='Street')),
                ('adtype', models.IntegerField(default=1, verbose_name='AddressType')),
            ],
        ),
        migrations.CreateModel(
            name='Contact',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('email', models.CharField(max_length=60, verbose_name='Email')),
                ('phone', models.CharField(max_length=25, verbose_name='Phone')),
                ('fname', models.CharField(max_length=15, verbose_name='Fname')),
                ('mname', models.CharField(max_length=15, null=True, verbose_name='Mname')),
                ('lname', models.CharField(max_length=15, verbose_name='Lname')),
            ],
        ),
        migrations.CreateModel(
            name='Content',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('href', models.CharField(default='#', max_length=50, verbose_name='URL')),
                ('title', models.CharField(max_length=300, verbose_name='Title')),
                ('description', models.TextField(null=True, verbose_name='Content')),
                ('pub_date', models.DateTimeField(auto_now_add=True, verbose_name='Published_Date')),
            ],
        ),
        migrations.CreateModel(
            name='Copyright',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('crendentials', models.CharField(max_length=40, verbose_name='crendentials')),
                ('url', models.CharField(max_length=40, verbose_name='URL')),
                ('title', models.CharField(max_length=50, verbose_name='Title')),
            ],
        ),
        migrations.CreateModel(
            name='Events',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('href', models.CharField(max_length=30, verbose_name='URL')),
                ('start_date', models.DateTimeField(verbose_name='Start')),
                ('end_date', models.DateTimeField(verbose_name='End')),
                ('description', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='ictc_site.Content')),
            ],
        ),
        migrations.CreateModel(
            name='Iclass',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=10, verbose_name='Name')),
                ('description', models.CharField(max_length=30, verbose_name='Content')),
            ],
        ),
        migrations.CreateModel(
            name='Media',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=30, verbose_name='Medianame')),
                ('url', models.CharField(max_length=40, verbose_name='URL')),
                ('fa', models.CharField(max_length=30, verbose_name='FAclass')),
            ],
        ),
        migrations.CreateModel(
            name='Menu',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('href', models.CharField(max_length=30, verbose_name='URL')),
                ('title', models.CharField(max_length=50, verbose_name='Title')),
            ],
        ),
        migrations.CreateModel(
            name='Page',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('about', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='ictc_site.Content')),
                ('contact', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='main_content', to='ictc_site.Contact')),
                ('intro', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='intro_content', to='ictc_site.Content')),
            ],
        ),
        migrations.CreateModel(
            name='Social',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('link', models.CharField(max_length=30, verbose_name='URLusername')),
                ('contact', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='ictc_site.Content')),
                ('stype', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='ictc_site.Media')),
            ],
        ),
        migrations.AddField(
            model_name='content',
            name='iclass',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='ictc_site.Iclass'),
        ),
        migrations.AddField(
            model_name='address',
            name='contact',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='ictc_site.Contact'),
        ),
    ]