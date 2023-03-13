## About Project

First Laravel project that I created. It is according to tutorial on Laracasts.
User can register/login the website, upload posts, leave comments etc.


#
### Getting Started
1\. First of all you need to clone coronatime repository from github:
```sh
git clone https://github.com/geo318/blog.git
```

2\. Next step requires you to run *composer install* in order to install all the dependencies.
```sh
composer install
```

3\. after you have installed all the PHP dependencies, it's time to install all the JS dependencies:
```sh
npm install
```

and also:
```sh
npm run dev
```
in order to build your tailwind resources.

4\. Now we need to set our env file. Go to the root of your project and execute this command.
```sh
cp .env.example .env
```
And now you should provide **.env** file all the necessary environment variables:

#
**MYSQL:**
>DB_CONNECTION=mysql

>DB_HOST=127.0.0.1

>DB_PORT=3306

>DB_DATABASE=*****

>DB_USERNAME=*****

>DB_PASSWORD=*****

##### Now, you should be good to go!


#
### Generate App key
if you've completed getting started section, generate app key:
```sh
php artisan key:generate
```

#
### Migration
then migrating database is fairly simple process, just execute:
```sh
php artisan migrate
```

#
### Publish assets
To create the symbolic link to make assets accessible from the web
```sh
php artisan storage:link
```

#
### Development

You can run Laravel's built-in development server by executing:

```sh
  php artisan serve
```
and then refer to the next segment.

#
