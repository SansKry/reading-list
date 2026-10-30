
# My Reading List
## About the Project
My Reading List is a simple web application built using Laravel to keep track of books I want to read and the books I am currently reading.
The main idea behind this project is to have one place where I can manage my reading list without needing to maintain it manually. Users can add new books, update their details, delete books they no longer want in the list, and filter books based on their reading status.
## Features
- **Add Books:** Add a book by entering its title, author, and reading status.
- **View Books:** See all the books added to the reading list.
- **Edit Books:** Update the details or reading status of an existing book.
- **Delete Books:** Remove a book from the list with a confirmation message.
- **Filter Books:** View books based on their status – All, To Read, Reading, or Finished.
## Technologies Used
- **PHP** – For backend development.
- **Laravel** – PHP framework used to build the application.
- **SQLite** – Used to store book details.
- **HTML** – For creating the web page structure.
- **Git and GitHub** – For version control and maintaining the project.
## How to Run the Project
Follow these steps to run the project on your local machine.
### 1. Clone the Repository
```bash
git clone YOUR_GITHUB_REPOSITORY_URL
```
### 2. Open the Project Folder
```bash
cd reading-list
```
### 3. Install Dependencies
```bash
composer install
```
### 4. Set Up the Environment File
For Windows:
```bash
copy .env.example .env
```
### 5. Generate the Application Key
```bash
php artisan key:generate
```
### 6. Run Database Migrations
```bash
php artisan migrate
```
This creates the required database tables for storing book information.
### 7. Start the Application
```bash
php artisan serve
```
Open the local URL displayed in your terminal to access the application.
## AI Usage
During the development of this project, I used ChatGPT and claude as a learning and debugging assistant. Since I am still learning Laravel, I took help from ChatGPT to understand some concepts and implement different features.
Some of the ways I used AI were:
- Understanding how Laravel routes, controllers, models, and migrations work.
- Getting explanations of database configuration and how book details are stored.
- Taking guidance while implementing the add, edit, and delete functionalities.
- Understanding how form validation works in Laravel.
- Getting help with implementing the book status filters.
- Finding and fixing errors encountered during development.
- Understanding Git commands and maintaining the project on GitHub.
I followed the steps, made changes to the code, and tested the features while building the project. This project also helped me get a better understanding of how a basic Laravel application works.
