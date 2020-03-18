# POROS Internship 2020 Dev

**Group 1**
- R. Komang Eling Pramuatmaja
- Marvel Timothy Raphael Manullang
- Sinta Karidina


[How to Setup a Laravel Project You Cloned from Github.com](https://devmarketer.io/learn/setup-laravel-project-cloned-github-com/ "Permalink to ")
=========================================================

This tutorial will show you the standard things you need to do to clone a github repo onto your local computer and get it setup to start working on your system. In addition to cloning the repo, we'd also setup the database, the env file, the encryption key, and more.

### 1\. Clone GitHub repo for this project locally

If the project is hosted on github, we can use git on your local computer to clone it from github onto your local computer.

**Note:** Make sure you have git installed locally on your computer first.

Find a location on your computer where you want to store the project. In my case I like all my projects to be a folder called `sites/`, so that is where I run the following command, which will pull the project from github and create a copy of it on my local computer at the sites directory inside another folder called "projectName". You can change the name of this folder it creates, by changing the last part of the code snippet below to match the name you want your folder to be called.

```bash
git clone linktogithubrepo.com/ projectName
```

To get the link to the repo, just visit the github page and click on the green "clone or download" button on the right hand side. This will reveal a url that you will replace in the linktogithub.com part of the snippet above.

![Clone from Github](https://devmarketer.io/wp-content/uploads/2018/02/github-clone-button.png)

Once this runs, you will have a copy of the project on your computer.

### 2\. cd into your project

You will need to be inside that project file to enter all of the rest of the commands in this tutorial. So remember to type `cd projectName` to move your terminal working location to the project file we just barely created. (Of course substitute "projectName" in the command above, with the name of the folder you created in the previous step).

### 3\. Install Composer Dependencies

Whenever you clone a new Laravel project you must now install all of the project dependencies. This is what actually installs Laravel itself, among other necessary packages to get started.

When we run composer, it checks the `composer.json` file which is submitted to the github repo and lists all of the composer (PHP) packages that your repo requires. Because these packages are constantly changing, the source code is generally not submitted to github, but instead we let composer handle these updates. So to install all this source code we run composer with the following command.

```bash
composer install
```

### 4\. Install NPM Dependencies

Just like how we must install composer packages to move forward, we must also install necessary NPM packages to move forward. This will install Vue.js, Bootstrap.css, Lodash, and Laravel Mix.

This is just like step 4, where we installed the composer PHP packages, but this is installing the Javascript (or Node) packages required. The list of packages that a repo requires is listed in the `packages.json` file which is submitted to the github repo. Just like in step 4, we do not commit the source code for these packages to version control (github) and instead we let NPM handle it.

```bash
npm install
```

### 5\. Create a copy of your .env file

`.env` files are not generally committed to source control for security reasons. But there is a `.env.example` which is a template of the `.env` file that the project expects us to have. So we will make a copy of the `.env.example` file and create a `.env` file that we can start to fill out to do things like database configuration in the next few steps.

```bash
cp .env.example .env
```

This will create a copy of the `.env.example` file in your project and name the copy simply `.env`.

### 6\. Generate an app encryption key

Laravel requires you to have an app encryption key which is generally randomly generated and stored in your `.env` file. The app will use this encryption key to encode various elements of your application from cookies to password hashes and more.

Laravel's command line tools thankfully make it super easy to generate this. In the terminal we can run this command to generate that key. (Make sure that you have already installed Laravel via composer and created an .env file before doing this, of which we have done both).

```bash
php artisan key:generate
```

If you check the `.env` file again, you will see that it now has a long random string of characters in the `APP_KEY` field. We now have a valid app encryption key.

### 7\. Create an empty database for our application

Create an empty database for your project using the database tools you prefer. Just create an empty database here, the exact steps will depend on your system setup.

### 8\. In the .env file, add database information to allow Laravel to connect to the database

We will want to allow Laravel to connect to the database that you just created in the previous step. To do this, we must add the connection credentials in the .env file and Laravel will handle the connection from there.

In the .env file fill in the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` options to match the credentials of the database you just created. This will allow us to run migrations and seed the database in the next step.

### 9\. Migrate the database

Once your credentials are in the .env file, now you can migrate your database.

```bash
php artisan migrate
```

It's not a bad idea to check your database to make sure everything migrated the way you expected.
